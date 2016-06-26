<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MainBundle\Entity\Produits;

class ProductController extends Controller {

    /**
     * @Route ("/site/product/{id}", name="app_product_details")
     */
    public function indexAction($id) {

        $product = $this->getDoctrine()
            ->getRepository('MainBundle:Produits')
            ->findOneBy(
                array('id' => $id)
            );

        return $this->render('MainBundle:Default:product.html.twig', ['product' => $product]);

    }

    /**
     * @Route ("/site/product/{id}/addPanier", name="app_product_addPanier")
     */
    public function addPanierAction($id) {



    }

}
