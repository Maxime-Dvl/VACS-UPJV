<?php

namespace App\Entity;

use App\Repository\DisponibiliteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DisponibiliteRepository::class)
 */
class Disponibilite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateDebut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateFin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reserve;

    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */
    private $Metier;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="disponibilites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->DateDebut;
    }

    public function setDateDebut(\DateTimeInterface $DateDebut): self
    {
        $this->DateDebut = $DateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->DateFin;
    }

    public function setDateFin(\DateTimeInterface $DateFin): self
    {
        $this->DateFin = $DateFin;

        return $this;
    }

    public function getReserve(): ?bool
    {
        return $this->reserve;
    }

    public function setReserve(bool $reserve): self
    {
        $this->reserve = $reserve;

        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->Metier;
    }

    public function setMetier(?string $Metier): self
    {
        $this->Metier = $Metier;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
