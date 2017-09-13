<?php

namespace AppBundle\Form\Type;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
                ->add('Envoyer', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
    }
}
