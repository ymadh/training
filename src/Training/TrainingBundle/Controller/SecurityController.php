<?php

namespace Training\TrainingBundle\Controller;


use Training\TrainingBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class SecurityController extends AbstractController
{

    /**
     * @Route("/register_old", name="register")
     * @Template()
     */
    public function indexAction()
    {


       $userForm = $this->createFormBuilder(new User())
            ->add('email')
            ->add('username')
            ->add('password')
            ->add('passwordRetype', 'text', array(
                'label'=>'Retype password:',
                'property_path'=>false,
                'required'=>false,
            ))
            ->getForm();

        // get the post
        if ($this->get('request')->getMethod() == 'POST') {

           // set the args to the form for validation
            $userForm->bind($this->get('request'));
            $formData = $this->getRequest()->get('form');
            if ($formData['password'] != $formData['passwordRetype']) {
                $error = new \Symfony\Component\Form\FormError('Mismatch passwords');
                $userForm->addError($error);
            }
            if ($userForm->isValid()) {

                $user = $userForm->getData();

                $factory = $this->get('security.encoder_factory');
                $encoder = $factory->getEncoder($user);
                $password = $encoder->encodePassword('admin', $user->getSalt());
                $user->setEnabled(true);
                $user->setLocked(false);
                $user->setExpired(false);
                $user->setCredentialsExpired(false);
                $this->getEM()->persist($user);
                $this->getEM()->flush();

                return $this->render(
                    "TrainingBundle:Security:thanks.html.twig"
                );
            }


        }

        return array(
            'userForm' => $userForm->createView()
        );
    }

    /**
     * @Route("/register/thanks")
     * @Template()
     */
    public function thanksAction()
    {
        return array('name' => 'hi');
    }

}