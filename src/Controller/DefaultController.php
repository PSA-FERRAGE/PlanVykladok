<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route(path="/", name="homepage")
     *
     * @param Request $request
     */
    public function indexAction(Request $request) {
        return $this->render('default/default.html.twig');
    }
}
