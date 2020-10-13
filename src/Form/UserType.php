<?php
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType {

public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
    ->add('name', TextType::class)
    ->add('email', EmailType::class)
    ->add('DateType', DateType::class)
    ->add('save', SubmitType::class);

}
}