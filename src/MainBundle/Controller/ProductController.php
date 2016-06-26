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

        $categories = $this->getDoctrine()
            ->getRepository('MainBundle:Categorie')
            ->findAll();

        if (!$product) {
            return $this->redirectToRoute('app_home');
        }
        
        return $this->render('MainBundle:Default:product.html.twig', [
            'product' => $product,
            'categories' => $categories
        ]);

    }

}
