<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CollectionsController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Collections:index.html.twig');
    }

    /**
     * @param $page
     * @return Response
     */
    public function pageAction($page)
    {
        if ($page == 2014) {
            return $this->render('AppBundle:Collections:collection2014.html.twig');
        }

        if ($page == 2015) {
            return $this->render('AppBundle:Collections:collection2015.html.twig');
        }
    }
}
