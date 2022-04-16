<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotroController extends AbstractController
{
    /**
     * @Route("/hotro", name="hotro")
     */
    public function index(): Response
    {
        return $this->render('hotro/index.html.twig', [
            'controller_name' => 'HotroController',
        ]);
    }
}
