<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Sanpham;
use App\Repository\SanphamRepository;
use App\Entity\Chitiethoadon;
use App\Form\AddProductType;
use App\Form\PaymentType;
use Doctrine\ORM\Query\Expr\Func;
use Symfony\Component\String\Slugger\SluggerInterface;
Use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;
use Symfony\Bridge\Twig\Node\DumpNode;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;



use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager;
class SanphamController extends AbstractController
{
     /**
     * @Route("/admin/", name="admin");
     */
    public function sanpham(ManagerRegistry $doctrine): Response
    {
        $sanpham = $doctrine->getRepository(Sanpham::class)->findAll();
      
        return $this->render('home/admin.html.twig',[
            'sanpham'=>$sanpham
        ]);

    }
      /**
    * @Route("/delete/{id}", name="remove", methods={"GET","POST"})
    */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $sanpham = $em->getRepository('App:Sanpham')->find($id);
        $em->remove($sanpham);
        $em->flush();   
        $this->addFlash(
            'error',
            'Sanpham deleted'
        );
        return $this->redirectToRoute('admin');
    }
    /**
    * @Route("/add/", name="add", methods={"GET","POST"})
    */
   
    
   public function createAction(Request $request,SluggerInterface $slugger  ){
    $createSanpham = new Sanpham();
    $form = $this->createForm(AddProductType::class, $createSanpham);
    if($this->saveChanges($form,$request,$createSanpham, $slugger)){
        $this->addFlash(
         'sanpham',
         'List Sanpham',
        );
        return $this->redirectToRoute('admin');
    }
    return $this->render('home/action/add.html.twig',['form'=> $form->createView()]);
    }
    public function saveChanges($form,$request,$createSanpham, $slugger ){
        $form->handleRequest($request);
        
        if ($form->isSubmitted() ) { 
        
            $createSanpham->getTensp($request->request->get('Sanpham')['tensp']);
            $brochureFile = $form->get('hinhanh')->getData();
            if($brochureFile){
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(),PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try{
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                }catch(FileException $e){

                }
                $createSanpham->setHinhanh($newFilename);
            }
            $createSanpham->getChitiet($request->request->get('sanpham')['chitiet']);
            $createSanpham->getSoluong($request->request->get('sanpham')['soluong']);
            $createSanpham->getDaban($request->request->get('sanpham')['daban']);
            $createSanpham->getGia($request->request->get('sanpham')['gia']);
         
            $createSanpham->getKhuyenmai1($request->request->get('sanpham')['khuyenmai1']);
            
            $createSanpham->getMadm($request->request->get('sanpham')['madm']);
            $createSanpham->getNgaycapnhat(\DateTime::createFromFormat('y-m-d',$request->request->get('sanpham')['ngaycapnhat']));
        
            $em = $this->getDoctrine()->getManager();
            $em->persist($createSanpham);
            $em->flush();
            return true;
        }
        return false;
    }
 
    /**
    * @Route("/updateProduct/{id}", name="update")
    */
    public function updateAction($id,Request $request,SluggerInterface $slugger){
        $em = $this->getDoctrine()->getManager();
        $sanpham = $em->getRepository('App:Sanpham')->find($id);
        $form = $this->createForm(AddProductType::class, $sanpham);
        
        if($this->saveChanges($form,$request,$sanpham, $slugger)){
            $this->addFlash(
                'notice',
                'Sanpham Edited'
            );
            return $this->redirectToRoute('admin');
        }
        return $this->render('home/action/updateProduct.html.twig',['form'=>$form->createView()]);
    }
 
    
}
