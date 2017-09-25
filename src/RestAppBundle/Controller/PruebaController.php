<?php

namespace RestAppBundle\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PruebaController extends FOSRestController
{
    /**
     * @Route("/api/prueba")
     */
    public function indexAction()
    {
        // return $this->render('RestAppBundle:prueba:index.html.twig', array(
        //     // ...
        // ));

        $data = array("Usuarios" => array(
        array(
            "nombre"   => "Víctor",
            "Apellido" => "Robles"
        ),
        array(
            "nombre"   => "Antonio",
            "Apellido" => "Martinez"
        )));

        return $data;
    }

}
