<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HoadonController extends AbstractController
{
    /**
     * @Route("/hoadon", name="hoadon")
     */
    public function index(): Response
    {
        return $this->render('hoadon/index.html.twig', [
            'controller_name' => 'HoadonController',
        ]);
    }
}
