<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActionsController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Actions:index.html.twig');
    }

    /**
     * @param $page
     * @return Response
     */
    public function pageAction($page)
    {
        if ($page == 'action-wedding-dress') {
            return $this->render('AppBundle:Actions:action-wedding-dress.html.twig');
        }

        if ($page == 'action-evening-dresses') {
            return $this->render('AppBundle:Actions:action-evening-dresses.html.twig');
        }

        if ($page == 'action-wedding-accessories') {
            return $this->render('AppBundle:Actions:action-wedding-accessories.html.twig');
        }

        if ($page == 'action-children-dresses') {
            return $this->render('AppBundle:Actions:action-children-dresses.html.twig');
        }
    }
}
