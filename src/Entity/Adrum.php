<?php

namespace App\Entity;

use App\Repository\AdrumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdrumRepository::class)
 */
class Adrum
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
    private $Nom;

    /**
     * @ORM\OneToMany(targetEntity=Citoyen::class, mappedBy="adrum")
     */
    private $citoyens;

    /**
     * @ORM\OneToMany(targetEntity=Famille::class, mappedBy="adrum")
     */
    private $familles;

    public function __construct()
    {
        $this->citoyens = new ArrayCollection();
        $this->familles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * @return Collection|Citoyen[]
     */
    public function getCitoyens(): Collection
    {
        return $this->citoyens;
    }

    public function addCitoyen(Citoyen $citoyen): self
    {
        if (!$this->citoyens->contains($citoyen)) {
            $this->citoyens[] = $citoyen;
            $citoyen->setAdrum($this);
        }

        return $this;
    }

    public function removeCitoyen(Citoyen $citoyen): self
    {
        if ($this->citoyens->removeElement($citoyen)) {
            // set the owning side to null (unless already changed)
            if ($citoyen->getAdrum() === $this) {
                $citoyen->setAdrum(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Famille[]
     */
    public function getFamilles(): Collection
    {
        return $this->familles;
    }

    public function addFamille(Famille $famille): self
    {
        if (!$this->familles->contains($famille)) {
            $this->familles[] = $famille;
            $famille->setAdrum($this);
        }

        return $this;
    }

    public function removeFamille(Famille $famille): self
    {
        if ($this->familles->removeElement($famille)) {
            // set the owning side to null (unless already changed)
            if ($famille->getAdrum() === $this) {
                $famille->setAdrum(null);
            }
        }

        return $this;
    }
}
