<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('default/index_home.html.twig');
    }

    /**
     * @return Response
     */
    public function contactsAction()
    {
        return $this->render('contacts.html.twig');
    }

    /**
     * @return Response
     */
    public function aboutAction()
    {
        return $this->render('about.html.twig');
    }

    /**
     * @return Response
     */
    public function englishAction()
    {
        return $this->render('english.html.twig');
    }
}
