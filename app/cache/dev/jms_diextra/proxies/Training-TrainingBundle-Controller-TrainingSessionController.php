<?php

namespace EnhancedProxy_2cbfaa0d41728f99733a5b63af8d67ab10629bb3\__CG__\Training\TrainingBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class TrainingSessionController extends \Training\TrainingBundle\Controller\TrainingSessionController
{
    private $__CGInterception__loader;

    public function newAction()
    {
        $ref = new \ReflectionMethod('Training\\TrainingBundle\\Controller\\TrainingSessionController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}