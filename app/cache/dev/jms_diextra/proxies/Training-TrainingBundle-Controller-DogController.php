<?php

namespace EnhancedProxy_0049c74efb2ab780a394b31f34e4d5d52c81a7ff\__CG__\Training\TrainingBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DogController extends \Training\TrainingBundle\Controller\DogController
{
    private $__CGInterception__loader;

    public function newAction()
    {
        $ref = new \ReflectionMethod('Training\\TrainingBundle\\Controller\\DogController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}