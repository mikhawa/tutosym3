<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
// notre formulaire
use AppBundle\Form\Type\MyFormType;

class MyController extends Controller {

    /**
     * @Route("/my/{param}", name="my", defaults={"param"=null})
     * @Method({"GET"})
     */
    public function myAction(Request $request) {
        /*
         * // service log (monolog)
         
        $logger = $this->get("logger");
        // info
        $logger->info('plop');
        // erreur dans les logs
        $logger->error('mon erreur');
         */
        //var_dump($request->get('param'));
        // grâce à var-dumper de packagist
        //dump($request->get('param'));
        //var_dump($request);
        //dump($request);
        
       /* $form = $this->createFormBuilder()
                ->add('name',TextType::class,[
                    'data'=>'données'
                ])
                ->add('Envoyer', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class)
                ->getForm();
        */
        
        // depuis mon formulaire
        $form = $this->createForm(MyFormType::class);
        
        return $this->render('myTemplate/my.html.twig',[
            'name'=>$request->get("param"),
            'formu'=>$form->createView()
            ]);
    }

}
