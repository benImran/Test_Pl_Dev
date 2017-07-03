<?php

namespace FactoryBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="passenger")
 */
class Passenger
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isCaptain;

    /**
     * @ORM\ManyToOne(targetEntity="FactoryBundle\Entity\Spaceship", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $spaceship;

    /**
     * @return mixed
     */
    public function getSpaceship()
    {
        return $this->spaceship;
    }

    /**
     * @param mixed $spaceship
     */
    public function setSpaceship($spaceship)
    {
        $this->spaceship = $spaceship;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getisCaptain()
    {
        return $this->isCaptain;
    }

    /**
     * @param mixed $isCaptain
     */
    public function setIsCaptain($isCaptain)
    {
        $this->isCaptain = $isCaptain;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}