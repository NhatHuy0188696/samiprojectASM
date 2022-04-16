<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Danhmuc;
use App\Repository\DanhmucRepository;
use App\Entity\Chitiethoadon;
use App\Entity\Sanpham;
use App\Form\AddProductType;
use App\Form\DanhmucType;
use App\Form\PaymentType;
use Doctrine\ORM\Query\Expr\Func;
use Symfony\Component\String\Slugger\SluggerInterface;
Use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;
use Symfony\Bridge\Twig\Node\DumpNode;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class DanhmucController extends AbstractController
{
    /**
     * @Route("/danhmuc", name="danhmuc");
     */
    public function danhmuc(ManagerRegistry $doctrine): Response
    {
        $danhmuc = $doctrine->getRepository(Danhmuc::class)->findAll();
      
        return $this->render('danhmuc/index.html.twig',[
            'Danhmuc'=> $danhmuc
        ]);

    }
     /**
    * @Route("/addDanhmuc/", name="addDanhmuc", methods={"GET","POST"})
    */
   
    
   public function createAction(Request $request,SluggerInterface $slugger  ){
    $createSanpham = new Danhmuc();
    $form = $this->createForm(DanhmucType::class, $createSanpham);
    if($this->saveChanges($form,$request,$createSanpham, $slugger)){
        $this->addFlash(
         'sanpham',
         'List Sanpham',
        );
        return $this->redirectToRoute('danhmuc');
    }
    return $this->render('danhmuc/action/add.html.twig',['form'=> $form->createView()]);
    }
    public function saveChanges($form,$request,$createSanpham, $slugger ){
        $form->handleRequest($request);
        
        if ($form->isSubmitted() ) { 
        
            $createSanpham->getDequi($request->request->get('Danhmuc')['dequi']);
            
            $createSanpham->getTendm($request->request->get('Danhmuc')['tendm']);
            $createSanpham->getMadm($request->request->get('Danhmuc')['madm']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($createSanpham);
            $em->flush();
            return true;
        }
        return false;
    }
    /**
    * @Route("/updateDanhmuc/{id}", name="updateDanhmuc")
    */
    public function updateAction($id,Request $request,SluggerInterface $slugger){
        $em = $this->getDoctrine()->getManager();
        $sanpham = $em->getRepository('App:Danhmuc')->find($id);
        $form = $this->createForm(DanhmucType::class, $sanpham);
        
        if($this->saveChanges($form,$request,$sanpham, $slugger)){
            $this->addFlash(
                'notice',
                'Sanpham Edited'
            );
            return $this->redirectToRoute('danhmuc');
        }
        return $this->render('danhmuc/action/updateDanhmuc.html.twig',['form'=>$form->createView()]);
    }
     /**
    * @Route("/removeDanhmuc/{id}", name="removeDanhmuc", methods={"GET","POST"})
    */
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $sanpham = $em->getRepository('App:Danhmuc')->find($id);
        $em->remove($sanpham);
        $em->flush();   
        $this->addFlash(
            'error',
            'Sanpham deleted'
        );
        return $this->redirectToRoute('danhmuc');
    }
}
