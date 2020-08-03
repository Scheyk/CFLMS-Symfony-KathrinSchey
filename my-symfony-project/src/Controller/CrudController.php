<?php

namespace App\Controller;


use Symfony\ Component\HttpFoundation\Response;
use  Symfony\Component\Routing\Annotation\ Route;
use Symfony\Component\ HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CrudController extends AbstractController
{
    /**
     * @Route("/home", name="crud")
     */
    public function home()
    {
        $link= mysqli_connect('localhost', 'root', '','cr11_kathrinschey_petadoption' );
        $query='SELECT * FROM animals';
        $result = mysqli_query($link, $query);
        $animals = array();

        while ($row = mysqli_fetch_array($result))
            {
                $animals[] = $row;
            }

        // Closing connection
        mysqli_close($link);

        return $this->render('crud/home.html.twig');
    }

    /**
     * @Route("/delite/{id}", name="del")
     */
    public function delite()
    {
        return $this->render('crud/delite.html.twig');
    }

    /**
     * @Route("/add", name="add")
     */
    public function add()
    {
        return $this->render('crud/add.html.twig');
    }

    /**
     * @Route("/update/{id}", name="update")
     */
    public function update()
    {
        return $this->render('crud/update.html.twig');
    }
}
