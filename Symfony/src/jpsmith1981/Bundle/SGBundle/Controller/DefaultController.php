<?php

namespace jpsmith1981\Bundle\SGBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('jpsmith1981SGBundle:Default:index.html.twig', array('name' => $name));
    }

    public function holaAction($name)
    {
    	return $this->render('jpsmith1981SGBundle:Default:hola.html.twig', array('name' => $name));
    }
}
