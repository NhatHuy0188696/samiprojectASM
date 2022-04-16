<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NguoidungController extends AbstractController
{
    /**
     * @Route("/nguoidung", name="nguoidung")
     */
    public function index(): Response
    {
        return $this->render('nguoidung/index.html.twig', [
            'controller_name' => 'NguoidungController',
        ]);
    }
}
