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
		$form = $this->createForm(new \Capitainerie\CoreBundle\Form\ContactType());
		$form->handleRequest($this->getRequest());

		if ($form->isValid()) {
			$message = \Swift_Message::newInstance()
			->setSubject(sprintf('Contact Capitainerie de %s', $form->get('name')->getData()))
			->setFrom($form->get('email')->getData())
			->setTo('contact@capitainerie-coworking.com')
			->setBody($form->get('message')->getData())
			;

			$this->get('mailer')->send($message);
			$this->get('session')->getFlashBag()->add('notice', "Votre message vient d'être envoyé. Nous vous répondrons dans les meilleurs délais.");
		}

		return array('form' => $form->createView());
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
