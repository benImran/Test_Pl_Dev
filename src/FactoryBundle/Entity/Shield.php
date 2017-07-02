<?php

namespace FactoryBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="shield")
 */
class Shield
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $sp;

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
    public function getSp()
    {
        return $this->sp;
    }

    /**
     * @param mixed $sp
     */
    public function setSp($sp)
    {
        $this->sp = $sp;
        return $this;
    }
}