<?php

namespace Training\TrainingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        return array('name' => 'test');
    }

    /**
     * @Route("/about")
     * @Secure(roles="ROLE_USER")
     * @Template("TrainingBundle:Default:index.html.twig")
     */
    public function aboutAction()
    {
        return array('name' => 'about');
    }
}
