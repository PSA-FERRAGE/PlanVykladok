<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="kamion")
 */
class Kamion
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned":true})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $nazov;

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get nazov
     *
     * @return string
     */
    public function getNazov(): string
    {
        return $this->nazov;
    }

    /**
     * Set nazov
     *
     * @param string $nazov
     *
     * @return Kamion
     */
    public function setNazov(string $nazov)
    {
        $this->nazov = $nazov;

        return $this;
    }
}
