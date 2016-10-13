<?php

namespace landingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('landingBundle:Default:index.html.twig');
    }

    public function bandoAction($num)
    {
      return $this->render('landingBundle:Default:bando.html.twig', array("num" => $num));
  }
}
