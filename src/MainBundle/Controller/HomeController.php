<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MainBundle\Entity\Produits;

class HomeController extends Controller {

    /**
     * @Route ("/site")
     */
    public function indexAction() {

        $products = $this->getDoctrine()
            ->getRepository('MainBundle:Produits')
            ->findAll(
                array('date', 'DESC')
            );

        return $this->render('MainBundle:Default:index.html.twig', ['products' => $products]);

    }

}
