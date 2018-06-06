<?php
/**
 * Created by PhpStorm.
 * User: wisleyaguiar
 * Date: 06/06/2018
 * Time: 20:29
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Marca;

class MarcaController extends FOSRestController
{

    /**
     * @Rest\Get("/rest/marca")
     */
    public function getAction()
    {
        $result = $this->getDoctrine()->getRepository('AppBundle:Marca')->findAll();
        if($result === null){
            return new View("Nenhuma marca cadastrada no momento", Response::HTTP_NOT_FOUND);
        }
        return $result;
    }

}