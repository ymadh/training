<?php

namespace EnhancedProxy_3bb4edeb90b986a200bd4e2544c351020812bd44\__CG__\Training\TrainingBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class DefaultController extends \Training\TrainingBundle\Controller\DefaultController
{
    private $__CGInterception__loader;

    public function aboutAction()
    {
        $ref = new \ReflectionMethod('Training\\TrainingBundle\\Controller\\DefaultController', 'aboutAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}