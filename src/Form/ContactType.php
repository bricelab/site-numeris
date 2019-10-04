<?php

namespace App\Form;

use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', TextType::class)
            ->add('Email', EmailType::class)
            ->add('Objet', TextType::class)
            ->add('Message', TextareaType::class)
            ->add('recaptcha', EWZRecaptchaType::class, array(
            'attr'        => array(
            'options' => array(
            'theme' => 'light',
            'type'  => 'image',
            'size'  => 'normal'
            )
        ),
        'mapped'      => false,
        'constraints' => array(
            new RecaptchaTrue()
        )
    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
