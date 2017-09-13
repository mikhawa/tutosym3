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
     * @Method({"GET","POST"})
     */
    public function myAction(Request $request) {
        
        
        // depuis mon formulaire
        $form = $this->createForm(MyFormType::class);
        
        // pour voir si le formulaire fonctionne
        $form->handleRequest($request);
        if($form->isValid()){
            dump($form->getClickedButton()->getName());
            dump($form->getData());
        }
        
        return $this->render('myTemplate/my.html.twig',[
            'name'=>$request->get("param"),
            'formu'=>$form->createView()
            ]);
    }

}
