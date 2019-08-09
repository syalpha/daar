<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CompteRepository")
 */
class Compte
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $montantcompte;

    /**
     * @ORM\Column(type="integer")
     */
    private $numcompte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantcompte(): ?int
    {
        return $this->montantcompte;
    }

    public function setMontantcompte(int $montantcompte): self
    {
        $this->montantcompte = $montantcompte;

        return $this;
    }

    public function getNumcompte(): ?int
    {
        return $this->numcompte;
    }

    public function setNumcompte(int $numcompte): self
    {
        $this->numcompte = $numcompte;

        return $this;
    }
}
