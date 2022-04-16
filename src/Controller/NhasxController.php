<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NhasxController extends AbstractController
{
    /**
     * @Route("/nhasx", name="nhasx")
     */
    public function index(): Response
    {
        return $this->render('nhasx/index.html.twig', [
            'controller_name' => 'NhasxController',
        ]);
    }
}
