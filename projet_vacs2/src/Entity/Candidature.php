<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Civilite;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_naissance;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $lieu_naissance;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $dptmt_naissance;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $pays_naissance;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $codepostal;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $portable;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cv;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cni;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $diplomes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $europeen;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $cartesejour;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $attestation_travail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chk_numsecu;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chk_compte;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chk_travaille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_heure;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_fin_contrat;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $contrat_travail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $checkbox_exact;

    /**
     * @ORM\Column(type="boolean")
     */
    private $checkbox_mobilite;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $Statut;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCivilite(): ?string
    {
        return $this->Civilite;
    }

    public function setCivilite(string $Civilite): self
    {
        $this->Civilite = $Civilite;

        return $this;
    }

    public function getNomNaissance(): ?string
    {
        return $this->nom_naissance;
    }

    public function setNomNaissance(string $nom_naissance): self
    {
        $this->nom_naissance = $nom_naissance;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieu_naissance;
    }

    public function setLieuNaissance(string $lieu_naissance): self
    {
        $this->lieu_naissance = $lieu_naissance;

        return $this;
    }

    public function getDptmtNaissance(): ?string
    {
        return $this->dptmt_naissance;
    }

    public function setDptmtNaissance(string $dptmt_naissance): self
    {
        $this->dptmt_naissance = $dptmt_naissance;

        return $this;
    }

    public function getPaysNaissance(): ?string
    {
        return $this->pays_naissance;
    }

    public function setPaysNaissance(string $pays_naissance): self
    {
        $this->pays_naissance = $pays_naissance;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodepostal(): ?int
    {
        return $this->codepostal;
    }

    public function setCodepostal(int $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getCv(): ?string
    {
        return $this->cv;
    }

    public function setCv(string $cv): self
    {
        $this->cv = $cv;

        return $this;
    }

    public function getCni(): ?string
    {
        return $this->cni;
    }

    public function setCni(string $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    public function getDiplomes(): ?string
    {
        return $this->diplomes;
    }

    public function setDiplomes(string $diplomes): self
    {
        $this->diplomes = $diplomes;

        return $this;
    }

    public function getEuropeen(): ?bool
    {
        return $this->europeen;
    }

    public function setEuropeen(bool $europeen): self
    {
        $this->europeen = $europeen;

        return $this;
    }

    public function getCartesejour(): ?string
    {
        return $this->cartesejour;
    }

    public function setCartesejour(string $cartesejour): self
    {
        $this->cartesejour = $cartesejour;

        return $this;
    }

    public function getAttestationTravail(): ?string
    {
        return $this->attestation_travail;
    }

    public function setAttestationTravail(string $attestation_travail): self
    {
        $this->attestation_travail = $attestation_travail;

        return $this;
    }

    public function getChkNumsecu(): ?bool
    {
        return $this->chk_numsecu;
    }

    public function setChkNumsecu(bool $chk_numsecu): self
    {
        $this->chk_numsecu = $chk_numsecu;

        return $this;
    }

    public function getChkCompte(): ?bool
    {
        return $this->chk_compte;
    }

    public function setChkCompte(bool $chk_compte): self
    {
        $this->chk_compte = $chk_compte;

        return $this;
    }

    public function getChkTravaille(): ?bool
    {
        return $this->chk_travaille;
    }

    public function setChkTravaille(bool $chk_travaille): self
    {
        $this->chk_travaille = $chk_travaille;

        return $this;
    }

    public function getNbHeure(): ?int
    {
        return $this->nb_heure;
    }

    public function setNbHeure(?int $nb_heure): self
    {
        $this->nb_heure = $nb_heure;

        return $this;
    }

    public function getDateFinContrat(): ?\DateTimeInterface
    {
        return $this->date_fin_contrat;
    }

    public function setDateFinContrat(?\DateTimeInterface $date_fin_contrat): self
    {
        $this->date_fin_contrat = $date_fin_contrat;

        return $this;
    }

    public function getContratTravail(): ?string
    {
        return $this->contrat_travail;
    }

    public function setContratTravail(?string $contrat_travail): self
    {
        $this->contrat_travail = $contrat_travail;

        return $this;
    }

    public function getCheckboxExact(): ?bool
    {
        return $this->checkbox_exact;
    }

    public function setCheckboxExact(bool $checkbox_exact): self
    {
        $this->checkbox_exact = $checkbox_exact;

        return $this;
    }

    public function getCheckboxMobilite(): ?bool
    {
        return $this->checkbox_mobilite;
    }

    public function setCheckboxMobilite(bool $checkbox_mobilite): self
    {
        $this->checkbox_mobilite = $checkbox_mobilite;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(?string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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
