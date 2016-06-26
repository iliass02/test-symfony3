<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MainBundle\Entity\Produits;
use MainBundle\Entity\Commandes;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class HomeController extends Controller {

    /**
     * @Route ("/site", name="app_home")
     */
    public function indexAction() {

        $products = $this->getDoctrine()
            ->getRepository('MainBundle:Produits')
            ->findAll(
                array('date', 'DESC')
            );

        $categories = $this->getDoctrine()
            ->getRepository('MainBundle:Categorie')
            ->findAll();

        return $this->render('MainBundle:Default:index.html.twig', [
            'products' => $products,
            'categories' => $categories
        ]);

    }

    /**
     * @Route ("/site/category/{id}", name="app_products_category")
     */
    public function categoryProductsAction($id) {

        $products = $this->getDoctrine()
            ->getRepository('MainBundle:Produits')
            ->findBy(array('categorie' => $id));

        $category_name = $this->getDoctrine()
            ->getRepository('MainBundle:Categorie')
            ->findOneBy(array('id' => $id));

        $categories = $this->getDoctrine()
            ->getRepository('MainBundle:Categorie')
            ->findAll();

        return $this->render('MainBundle:Default:index.html.twig', [
            'products' => $products,
            'categories' => $categories,
            'category_name' => $category_name->getNomcategorie()
        ]);

    }

    /**
     * @Route ("/site/product/{id}/addPanier", name="app_product_addPanier")
     */
    public function addPanierAction($id) {

        $product = $this->getDoctrine()
            ->getRepository('MainBundle:Produits')
            ->findOneBy(array('id' => $id));


        $commandes = new Commandes();
        $commandes->setDate(new \DateTime());
        $commandes->setIdproduit($product);
        $commandes->setPayer(0);

        $em = $this->getDoctrine()->getManager();
        $em->persist($commandes);
        $em->flush();

        return $this->redirectToRoute('app_product_details', array('id' => $id));

    }

    

}
