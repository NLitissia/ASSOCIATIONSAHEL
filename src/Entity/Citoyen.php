<?php

namespace App\Entity;

use App\Repository\CitoyenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CitoyenRepository::class)
 */
class Citoyen
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomPere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomMere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomMere;

    /**
     * @ORM\Column(type="boolean")
     */
    private $mariee;

    /**
     * @ORM\ManyToOne(targetEntity=Adrum::class, inversedBy="citoyens")
     */
    private $adrum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getPrenomPere(): ?string
    {
        return $this->PrenomPere;
    }

    public function setPrenomPere(string $PrenomPere): self
    {
        $this->PrenomPere = $PrenomPere;

        return $this;
    }

    public function getNomMere(): ?string
    {
        return $this->NomMere;
    }

    public function setNomMere(string $NomMere): self
    {
        $this->NomMere = $NomMere;

        return $this;
    }

    public function getPrenomMere(): ?string
    {
        return $this->PrenomMere;
    }

    public function setPrenomMere(string $PrenomMere): self
    {
        $this->PrenomMere = $PrenomMere;

        return $this;
    }

    public function getMariee(): ?bool
    {
        return $this->mariee;
    }

    public function setMariee(bool $mariee): self
    {
        $this->mariee = $mariee;

        return $this;
    }

    public function getAdrum(): ?Adrum
    {
        return $this->adrum;
    }

    public function setAdrum(?Adrum $adrum): self
    {
        $this->adrum = $adrum;

        return $this;
    }
}
