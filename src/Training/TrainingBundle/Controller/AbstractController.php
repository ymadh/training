<?php

namespace Training\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

abstract class AbstractController extends Controller
{

    /**
     * @return object
     */
    protected function getEM()
    {
        return $this->getDoctrine()->getManager();
    }

    /**
     * @param $entity
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    protected function getRepo($entity)
    {
        return $this->getDoctrine()->getRepository('TrainingBundle:'.$entity);

    }

}