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

class MainController extends AbstractController
{
    
    /**
     * @Route("/", name="home")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
       $products = $doctrine->getRepository(Sanpham::class)->findAll();
        return $this->render('home/index.html.twig',['products'=>$products]);
    
    }
    /**
     * @Route("/detail{id}", name="product_Details")
     */
    
    public function productDetail($id,ManagerRegistry $doctrine):Response
    {
      $sanpham = $this->getDoctrine()->getRepository('App:Sanpham')->find($id);
        $products = $doctrine->getRepository(Sanpham::class)->findAll();
      return $this->render('home/product/product.html.twig',[
          'sanpham'=>$sanpham,
          'products'=>$products
        ]);
    
    }
    
   
     /**
     * @Route("/detail", name="topsaler")
     */
   
    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request): Response
    {
        $name = $request->get('name');
        return $this->render('home/custom.html.twig',[
            'name' => $name
        ]);
    
    }
   
   /**
     * @Route("/payment{id}", name="payment")
     */
    public function payment($id,ManagerRegistry $doctrine,Request $request,SluggerInterface $slugger):Response{
        $sanpham = $this->getDoctrine()->getRepository('App:Sanpham')->find($id);
        $products = $doctrine->getRepository(Sanpham::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $sanpham = $em->getRepository('App:Sanpham')->find($id);
        $form = $this->createForm(PaymentType::class, $sanpham);
        
        return $this->render('home/product/payment.html.twig',[
            'sanpham'=>$sanpham,
            'products'=>$products,
            'form'=>$form->createView(
                
            )
        ]);
    }
    
}
