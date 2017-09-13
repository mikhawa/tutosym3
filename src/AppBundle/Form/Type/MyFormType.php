<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
/**
 * Description of MyFormType
 *
 * @author Michael
 */
class MyFormType extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('name',TextType::class,[
                    'data'=>'données'
                ])
                ->add('Envoyer', SubmitType::class)
                ->add('Envoyer 2', SubmitType::class)
                ->add("Supprimer", ButtonType::class);
    }
}
