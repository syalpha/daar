<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
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
    private $montanttrans;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetrans;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontanttrans(): ?int
    {
        return $this->montanttrans;
    }

    public function setMontanttrans(int $montanttrans): self
    {
        $this->montanttrans = $montanttrans;

        return $this;
    }

    public function getDatetrans(): ?\DateTimeInterface
    {
        return $this->datetrans;
    }

    public function setDatetrans(\DateTimeInterface $datetrans): self
    {
        $this->datetrans = $datetrans;

        return $this;
    }
}
