<?php

namespace Capitainerie\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {
    public function mainMenu(FactoryInterface $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav navbar-right');

        $homeMenu = $menu->addChild('A propos');
    	$homeMenu->addChild('Qui sommes nous?', array('route' => 'homepage'));
    	$homeMenu->addChild('Qu\'est ce que le coworking?', array('route' => 'homepage'));
    	$placeMenu = $menu->addChild('Le lieu', array('route' => 'place'));
        $placeMenu->addChild('Découvez le lieu', array('route' => 'place'));
        $placeMenu->addChild('Espace 1', array('route' => 'homepage'));
        $placeMenu->addChild('Espace 2', array('route' => 'homepage'));
        $placeMenu->addChild('Espace 3', array('route' => 'homepage'));
        $placeMenu->addChild('Espace 4', array('route' => 'homepage'));
        $placeMenu->addChild('Accès', array('route' => 'homepage'));

        $menu->addChild('Tarifs', array('route' => 'prices'));
        $menu->addChild('Co-workers', array('route' => 'team'));
        $menu->addChild('FAQ', array('route' => 'faq'));
        $menu->addChild('Contact', array('route' => 'contact'));

        return $menu;
    }
}