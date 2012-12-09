<?php

namespace Training\TrainingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Training\TrainingBundle\Entity\TrainingSession
 *
 * @ORM\Table(name="training_behavior")
 * @ORM\Entity(repositoryClass="Training\TrainingBundle\Entity\TrainingSessionRepository")
 */
class TrainingSession
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
     *
     * protected $slug;
     */

    /**
     * @var Doctrine\Common\Collections\ArrayCollection $dogs
     *
     * @ORM\ManyToOne(targetEntity="Dog", inversedBy="behaviors",
     *               cascade={"all"}
     * )
     * @ORM\JoinTable(name="training_dog_sessions")
     */
    protected $dog;

    /**
     * @var Date $sessionDate
     *
     * @ORM\Column(type="datetime")
     */
    protected $sessionDate;

    public function __construct()
    {

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

    public function setSessionDate($date)
    {
        $this->sessionDate = $date;
        return $this;
    }

    public function getSessionDate()
    {
        return $this->sessionDate;
    }

    public function getDog()
    {
        return $this->dog;
    }
    public function setDog($dog)
    {
        $this->dog = $dog;
        return $this;
    }


}
?>