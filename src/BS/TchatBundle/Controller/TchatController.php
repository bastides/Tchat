<?php

namespace BS\TchatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TchatController extends Controller
{
    public function tchatAction()
    {
        return $this->render('BSTchatBundle:Tchat:tchat.html.twig');
    }
}
