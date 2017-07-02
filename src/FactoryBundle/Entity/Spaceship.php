<?php

namespace FactoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="passenger")
 */
class Spaceship
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string" length=30)
     */
    private $name;
    /**
     * @ORM\Column(type="string" length=30)
     */
    private $type;
    /**
     * @ORM\Column(type="string" length=30)
     */
    private $hp;
    /**
     * @ORM\Column(type="integer")
     */
    private $hpMax;
    /**
     * @ORM\Column(type="integer")
     */
    private $damages;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHpMax()
    {
        return $this->hpMax;
    }

    /**
     * @param mixed $hpMax
     */
    public function setHpMax($hpMax)
    {
        $this->hpMax = $hpMax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDamages()
    {
        return $this->damages;
    }

    /**
     * @param mixed $damages
     */
    public function setDamages($damages)
    {
        $this->damages = $damages;
        return $this;
    }

}