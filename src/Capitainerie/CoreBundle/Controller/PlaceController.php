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
	 * @Route("/montauban/le-lieu/espace1", name="place_space1")
	 * @Template()
	 */
	public function space1Action()
	{
		return array();
	}


}
