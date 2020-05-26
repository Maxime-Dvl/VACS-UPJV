<?php

namespace App\Entity;

use App\Repository\PaieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaieRepository::class)
 */
class Paie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $numsecu;

    /**
     * @ORM\Column(type="string", length=27, nullable=true)
     */
    private $rib;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $filenumsecu;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $filerib;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $filedomicile;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $fileattestation;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fileCNI;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $handicap;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $filehandicap;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valide;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumsecu(): ?string
    {
        return $this->numsecu;
    }

    public function setNumsecu(?string $numsecu): self
    {
        $this->numsecu = $numsecu;

        return $this;
    }

    public function getRib(): ?string
    {
        return $this->rib;
    }

    public function setRib(?string $rib): self
    {
        $this->rib = $rib;

        return $this;
    }

    public function getFilenumsecu(): ?string
    {
        return $this->filenumsecu;
    }

    public function setFilenumsecu(string $filenumsecu): self
    {
        $this->filenumsecu = $filenumsecu;

        return $this;
    }

    public function getFilerib(): ?string
    {
        return $this->filerib;
    }

    public function setFilerib(string $filerib): self
    {
        $this->filerib = $filerib;

        return $this;
    }

    public function getFiledomicile(): ?string
    {
        return $this->filedomicile;
    }

    public function setFiledomicile(?string $filedomicile): self
    {
        $this->filedomicile = $filedomicile;

        return $this;
    }

    public function getFileattestation(): ?string
    {
        return $this->fileattestation;
    }

    public function setFileattestation(string $fileattestation): self
    {
        $this->fileattestation = $fileattestation;

        return $this;
    }

    public function getFileCNI(): ?string
    {
        return $this->fileCNI;
    }

    public function setFileCNI(?string $fileCNI): self
    {
        $this->fileCNI = $fileCNI;

        return $this;
    }

    public function getHandicap(): ?bool
    {
        return $this->handicap;
    }

    public function setHandicap(?bool $handicap): self
    {
        $this->handicap = $handicap;

        return $this;
    }

    public function getFilehandicap(): ?string
    {
        return $this->filehandicap;
    }

    public function setFilehandicap(string $filehandicap): self
    {
        $this->filehandicap = $filehandicap;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(?bool $valide): self
    {
        $this->valide = $valide;

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
