<?php

namespace App\Form\Comment;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('info', TextareaType::class, [
                'attr'=>[
                    'class' => 'form-control',
                ],
                'label' => 'Info'
            ])
        ;
    }
}