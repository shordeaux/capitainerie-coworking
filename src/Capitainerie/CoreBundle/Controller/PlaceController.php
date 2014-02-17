<?php

namespace Capitainerie\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class PlaceController extends Controller
{

	/**
	 * @Route("/montauban/le-lieu", name="place")
	 * @Template()
	 */
	public function indexAction()
	{
		return array();
	}

    /**
     * @Route("/montauban/le-lieu/le-sous-marin", name="sous-marin")
     * @Template()
     */
    public function sousMarinAction()
    {
        return array();
    }

    /**
     * @Route("/montauban/le-lieu/le-port", name="port")
     * @Template()
     */
    public function portAction()
    {
        return array();
    }

    /**
     * @Route("/montauban/le-lieu/la-salle-de-reunion", name="salle-reunion")
     * @Template()
     */
    public function salleReunionAction()
    {
        return array();
    }

    /**
     * @Route("/montauban/le-lieu/le-bar", name="bar")
     * @Template()
     */
    public function barAction()
    {
        return array();
    }


}
