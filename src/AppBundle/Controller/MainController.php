<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class MainController extends Controller
{
    /**
     * @Route("/main", name="main_index")
     * @Route("/", name="homepage")
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function indexAction(){
        return $this->render('main/index.html.twig', array());
    }
    
    /**
     * @Route("/addSuccess", name="main_add_success")
     * @Security("has_role('ROLE_ADMIN')")
    */
    public function addSuccessAction(){
        return $this->render('main/addSuccess.html.twig', array());
    }    
}
