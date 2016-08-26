<?php

namespace Only\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OnlyStoreBundle:Default:index.html.twig');
    }
}
