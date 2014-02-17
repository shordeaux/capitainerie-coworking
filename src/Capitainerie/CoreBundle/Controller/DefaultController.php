<?php

namespace Capitainerie\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function rootAction()
	{
		return $this->redirect($this->generateUrl('presentation'), 301);
	}
	/**
	 * @Route("/montauban", name="presentation")
	 * @Template()
	 */
	public function indexAction()
	{
		return array();
	}
	/**
	 * @Route("/montauban/le-lieu", name="place")
	 * @Template()
	 */
	public function placeAction()
	{
		return array();
	}
	/**
	 * @Route("/montauban/tarifs", name="prices")
	 * @Template()
	 */
	public function pricesAction()
	{
		return array();
	}
	/**
	 * @Route("/montauban/contact", name="contact")
	 * @Template()
	 */
	public function contactAction()
	{
        if($this->getRequest()->getMethod('POST')){
            $nom = $this->getRequest()->get('nom');
            $email = $this->getRequest()->get('email');
            $text = $this->getRequest()->get('text');
            if($nom != "" && $email != "" && $text != ""){
                //TODO: send mail.
                return array('invalid' => false, 'sent' => true);
            }else{
                return array('invalid' => true, 'sent' => false);
            }
        }

		return array('invalid' => false, 'sent' => false);
	}
	/**
	 * @Route("/faq", name="faq")
	 * @Template()
	 */
	public function faqAction()
	{
		return array();
	}
	/**
	 * @Route("/privacy", name="privacy")
	 * @Template()
	 */
	public function privacyAction()
	{
		return array();
	}
	/**
	 * @Route("/mentions_legales", name="legals")
	 * @Template()
	 */
	public function legalsAction()
	{
		return array();
	}

}
