<?php

namespace App\Form\Newsletter;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class AnonJoinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Mail'
            ])
            ->add('set', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success waves-effect mid'
                ],
                'label' => 'Set newsletter'
            ])
        ;
    }
}