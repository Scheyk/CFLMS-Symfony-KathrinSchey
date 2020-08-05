<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Product;

class ProductController extends AbstractController
{
	 /**
    * @Route("/all", name="indexAction")
    */ 
        public function indexAction()
        {
            $products = $this->getDoctrine()
                ->getRepository(Product::class)
                ->findAll(); // this variable $products will store the result of running a query to find all the products
             return $this->render('product/index.html.twig', array("products"=>$products)); // i send the variable that have all the products as an array of objects to the index.html.twig page
        }

    /**
    * @Route("/create", name="createAction")
    */
   public function createAction()
   {  
       
        // you can fetch the EntityManager via $this->getDoctrine()
       // or you can add an argument to your action: createAction(EntityManagerInterface $em)
       $em = $this->getDoctrine()->getManager();
       $product = new  Product(); // here we will create an object from our class Product.
       $product->setName('polster'); // in our Product class we have a set function for each column in our db
       $product->setPrice(30);

       // tells Doctrine you want to (eventually) save the Product (no queries yet)
       $em->persist($product);
        // actually executes the queries (i.e. the INSERT query)
       $em->flush();
       return  new Response('<div class="m-auto"><p>Saved new product with id:</p><p>'.$product->getId().'</p></div>');
       
   }

   /**
    * @Route("/details/{productId}", name="detailsAction")
    */ 
         public function showdetailsAction($productId)
        {
            $product = $this->getDoctrine()
                ->getRepository(Product::class)
                ->find($productId);
             if (!$product) {
                return new Response('No product found for id '.$productId);
            } else {
                     return $this->render('product/details.html.twig',array("product" =>$product)); 
            }
          
        }
}
