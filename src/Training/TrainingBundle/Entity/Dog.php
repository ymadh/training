<?php

namespace Training\TrainingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training\TrainingBundle\Entity\Dog
 *
 * @ORM\Table(name="training_dog")
 * @ORM\Entity(repositoryClass="Training\TrainingBundle\Entity\DogRepository")
 */
class Dog
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="dogs")
     */
    protected $user;

    /**
    * @var Doctrine\Common\Collections\ArrayCollection
    *
    * @ORM\OneToMany(targetEntity="TrainingSession", mappedBy="dog")
    *
    */
    protected $trainingSessions;

    public function __construct()
    {

        $this->trainingSessions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param $name
     * @return Dog
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param User $user
     * @return Dog
     */
    public function setUser(User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

}
?>