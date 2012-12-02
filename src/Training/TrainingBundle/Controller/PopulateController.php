<?php

namespace Training\TrainingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class PopulateController extends AbstractController
{
    /**
     * purely until unit tests are written for entities
     * or fixtures are setup
     * @Route("/populate")
     * @Template()
     */
    public function indexAction()
    {


        $user = new \Training\TrainingBundle\Entity\User();
        $user->setUsername('user2');
        $user->setEmail('test2@test.com');
        $user->setPassword('test');
         $factory = $this->get('security.encoder_factory');
         $encoder = $factory->getEncoder($user);
         $password = $encoder->encodePassword('admin', $user->getSalt());
         $user->setEnabled(true);
         $user->setLocked(false);
         $user->setExpired(false);
         $user->setCredentialsExpired(false);
         $this->getEM()->persist($user);
         $this->getEM()->flush();


    }

}
