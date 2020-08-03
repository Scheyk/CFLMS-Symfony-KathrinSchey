<?php

namespace App\Controller;


// use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MenueController extends AbstractController
{
    /**
     * @Route("/", name="menue")
     */
    public function index()
    {
        return $this->render('menue/index.html.twig');
    }

    /**
     * @Route("/new", name="new")
     */
    public function new()
    {
        return $this->render('menue/new.html.twig');
    }

        
}
