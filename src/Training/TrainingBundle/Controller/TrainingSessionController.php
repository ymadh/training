<?php

namespace Training\TrainingBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Training\TrainingBundle\Entity\TrainingSession;

class TrainingSessionController extends AbstractController
{
    /**
     * @Route("/behavior/new", name="newBehavior")
     * @Secure(roles="ROLE_USER")
     * @Template()
     */
    public function newAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $behaviorForm = $this->createFormBuilder(new TrainingSession())
                   ->add('dog','entity', array(
                         'class' => 'TrainingBundle:Dog',
                            'query_builder' => function(\Doctrine\ORM\EntityRepository $er) use ($user) {
                                return $er->createQueryBuilder('d')->where('d.user = :u')
                                    ->orderBy('d.name', 'ASC')->setParameter(':u',$user->getId());
                          },

                         'property' => 'name',
                         'mapped' => 'id',
                         'required'=>false,
                    ))
                   ->add('name','text',array('label'=>'Training Session Title'))
                   ->add('sessionDate','date',array('label'=>'Training Date'))
                   ->getForm();

       // get the post
       if ($this->get('request')->getMethod() == 'POST') {

          // set the args to the form for validation
           $behaviorForm->bind($this->get('request'));

           if ($behaviorForm->isValid()) {

               $session = $behaviorForm->getData();

               $this->tagManager = new \DoctrineExtensions\Taggable\TagManager($this->getEM());

               $this->getEM()->getEventManager()->addEventSubscriber(new \DoctrineExtensions\Taggable\TagListener($this->tagManager));


                // ask the tag manager to create a Tag object
                 $fooTag = $this->tagManager->loadOrCreateTag('foo');

               $this->getEM()->persist($session);
               $this->getEM()->flush();

               $this->tagManager->addTags($fooTag, $session);


               return $this->render(
                   "TrainingBundle:TrainingSession:success.html.twig"
               );
           }


       }

       return array(
           'behaviorForm' => $behaviorForm->createView()
       );
    }

}