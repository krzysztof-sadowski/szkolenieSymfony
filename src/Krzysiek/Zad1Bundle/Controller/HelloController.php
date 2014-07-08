<?php

namespace Krzysiek\Zad1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function helloAction($name)
    {
        return $this->render('KrzysiekZad1Bundle:Hello:hello.html.twig', array('name' => $name));
    }

}
