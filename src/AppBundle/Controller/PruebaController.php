<?php

namespace AppBundle\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class PruebaController extends FOSRestController
{
    /**
     * @Route("/api/prueba")
     * @Method({"POST"})
     */
    public function indexAction(Request $request)
    {
        $data = array(
          "Usuarios" => array(
            array(
              "nombre"   => "Víctor",
              "Apellido" => "Robles"
            ),
            array(
              "nombre"   => "Antonio",
              "Apellido" => "Martinez"
            ),

          )
        );

        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        if (!empty($nombre) && !empty($apellido)){
          $data['Usuarios'][] = array(
            "nombre" => $request->get('nombre'),
            "Apellido" => $request->get('apellido')
          );
        }

        $view = $this->view($data);
        return $this->handleView($view);
    }

}
