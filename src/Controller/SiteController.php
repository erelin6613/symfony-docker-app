<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('site/index.php.twig');
    }

    /**
     * @Route("/user/{name?}", name="greetUser")
     * @param $request
     * @return Response
     */
    public function user(Request $request)
    {
        $name = dump($request->get('name'));
        return new Response('<h1>hi, '. $name .' !</h1>');
    }
}
