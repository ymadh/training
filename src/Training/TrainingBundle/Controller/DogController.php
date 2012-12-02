<?php

namespace Training\TrainingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Training\TrainingBundle\Entity\Dog;

class DogController extends AbstractController
{
    /**
     * @Route("/dog/new", name="newDog")
     * @Secure(roles="ROLE_USER")
     * @Template()
     */
    public function newAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $dogForm = $this->createFormBuilder(new Dog())
                   ->add('name')
                   ->getForm();

       // get the post
       if ($this->get('request')->getMethod() == 'POST') {

          // set the args to the form for validation
           $dogForm->bind($this->get('request'));

           if ($dogForm->isValid()) {

               $dog = $dogForm->getData();
               $dog->setUser($user);

               $this->getEM()->persist($dog);
               $this->getEM()->flush();

               return $this->render(
                   "TrainingBundle:Dog:success.html.twig"
               );
           }


       }

       return array(
           'dogForm' => $dogForm->createView()
       );
    }
}
