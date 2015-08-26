<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/news", name="news")
     */
    public function newsAction()
    {
        return $this->render('news.html.twig');
    }


    /**
     * @Route("/action", name="action")
     */
    public function actionAction()
    {
        return $this->render('action.html.twig');
    }

    /**
     * @Route("/collection", name="collection")
     */
    public function collectionAction()
    {
        return $this->render('collection.html.twig');
    }

    /**
     * @Route("/collection2014", name="collection-2014")
     */
    public function collectionFirstAction()
    {
        return $this->render('collection2014.html.twig');
    }

    /**
     * @Route("/collection2015", name="collection-2015")
     */
    public function collectionTwoAction()
    {
        return $this->render('collection2015.html.twig');
    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contactsAction()
    {
        return $this->render('contacts.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/new-page", name="new-page")
     */
    public function newPageAction()
    {
        return $this->render('new-page.html.twig');
    }
}
