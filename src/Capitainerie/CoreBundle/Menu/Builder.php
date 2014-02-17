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
        $placeMenu->addChild('Le sous marin', array('route' => 'sous-marin'));
        $placeMenu->addChild('Le port', array('route' => 'port'));
        $placeMenu->addChild('La salle de réunion', array('route' => 'salle-reunion'));
        $placeMenu->addChild('Le bar', array('route' => 'bar'));
        $placeMenu->addChild('Accès', array('route' => 'homepage'));

        $menu->addChild('Tarifs', array('route' => 'prices'));
        $menu->addChild('Co-workers', array('route' => 'team'));
        $menu->addChild('FAQ', array('route' => 'faq'));
        $menu->addChild('Contact', array('route' => 'contact'));

        return $menu;
    }
}