<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('AppBundle:News:index.html.twig');
    }

    /**
     * @param $page
     * @return Response
     */
    public function pageAction($page)
    {
        return $this->render('AppBundle:News:page.html.twig');
    }
}
