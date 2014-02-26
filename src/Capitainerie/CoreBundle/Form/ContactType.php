<?php 

namespace Capitainerie\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $attributes = array('class' => 'form-control');

        $builder
        ->add('name', 'text', array(
            'required' => true,
            'attr' => $attributes,
            'constraints' => array(
                new Constraints\NotBlank(array('message' => "Le nom doit être reseigné.")),
                new Constraints\Length(array('min' => 5, 'minMessage' => 'Le nom doit avoir une taille minimum de 5 caractères.', 'max' => 25, 'maxMessage' => "Le nom renseigné doit avoir une taille maximum de 25 caractères.")),
                )
            ))
        ->add('email', 'email', array(
            'required' => true,
            'attr' => $attributes,
            'constraints' => array(
             new Constraints\NotBlank(array('message' => "L'email doit être renseigné.")),
             new Constraints\Email(array('message' => "L'email doit être valide (ex: nom.utilisateur@domaine.com).")),
             )
            ));

        $attributes['rows'] = 8;
        $builder->add('message', 'textarea', array(
            'required' => true,
            'attr' => $attributes,
            'constraints' => array(
                new Constraints\NotBlank(array('message' => "Vous devez renseigner un message.")),
                new Constraints\Length(array('min' => 10, 'minMessage' => "Le message doit avoir une taille minimum de 10 caractères.", 'max' => 700, 'maxMessage' => "Le message doit avoir une taille maximum de 700 caractères.")),
                )
            ))

        ->add('captcha', 'captcha', array('invalid_message' => "Code incorrect."));
        ;
    }

    public function getName()
    {
        return 'contact';
    }
}