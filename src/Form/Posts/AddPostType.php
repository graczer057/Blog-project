<?php


namespace App\Form\Posts;


use App\Entity\Posts\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr'=>[
                    'class' => 'form-control',
                ],
                'label' => 'title'
            ])
            ->add('info', TextareaType::class, [
                'attr'=>[
                    'class' => 'form-control',
                ],
                'label' => 'info'
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class'=>'btn btn-success waves-effect right'
                ],
                'label' => 'save'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            '' => Post::class,
        ]);
    }
}