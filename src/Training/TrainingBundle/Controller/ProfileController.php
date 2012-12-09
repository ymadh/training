<?php

namespace Training\TrainingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Training\TrainingBundle\Entity\TrainingSession;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/edit", name="editProfile")
     * @Secure(roles="ROLE_USER")
     * @Template()
     */
    public function editAction()
    {
        // view your own profile
        $user = $this->container->get('security.context')->getToken()->getUser();
        $dogs = $user->getDogs();
        return array(
           'dogs' => $dogs
        );
    }
}