<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TintucController extends AbstractController
{
    /**
     * @Route("/tintuc", name="tintuc")
     */
    public function index(): Response
    {
        return $this->render('tintuc/index.html.twig', [
            'controller_name' => 'TintucController',
        ]);
    }
}
