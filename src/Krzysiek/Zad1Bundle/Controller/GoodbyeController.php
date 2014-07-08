<?php

namespace Krzysiek\Zad1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GoodbyeController extends Controller
{
    /**
     * @Route("/goodbye/{name}", name="goodbye")
     * @Template()
     */
    public function goodbyeAction($name)
    {
        return array('name' => $name);
    }

}
