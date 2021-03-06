<?php

namespace App\Form\Posts;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class AddPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr'=>[
                    'class' => 'form-control',
                ],
                'label' => 'Title'
            ])
            ->add('info', TextareaType::class, [
                'attr'=>[
                    'class' => 'form-control',
                ],
                'label' => 'Description'
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class'=>'btn btn-success waves-effect right'
                ],
                'label' => 'Post'
            ])
        ;
    }
}