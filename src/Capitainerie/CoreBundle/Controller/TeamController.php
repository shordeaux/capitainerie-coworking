<?php

namespace Capitainerie\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends Controller
{

	/**
	 * @Route("/montauban/membres", name="team")
	 * @Template()
	 */
	public function indexAction()
	{
		return array();
	}
	/**
	 * @Route("/montauban/membres/shordeaux", name="team_shordeaux")
	 * @Template()
	 */
	public function shordeauxAction()
	{
		return array();
	}


}
