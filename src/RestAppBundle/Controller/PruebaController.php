<?php

namespace RestAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PruebaController extends Controller
{
    /**
     * @Route("/prueba")
     */
    public function indexAction()
    {
        return $this->render('RestAppBundle:prueba:index.html.twig', array(
            // ...
        ));
    }

}
