<?php

namespace App\Entity;

use App\Repository\FamilleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilleRepository::class)
 */
class Famille
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
     * @ORM\ManyToOne(targetEntity=Adrum::class, inversedBy="familles")
     */
    private $adrum;

    /**
     * @ORM\OneToMany(targetEntity=Citoyen::class, mappedBy="famille")
     */
    private $citoyens;

    public function __construct()
    {
        $this->citoyens = new ArrayCollection();
    }

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

    public function getAdrum(): ?Adrum
    {
        return $this->adrum;
    }

    public function setAdrum(?Adrum $adrum): self
    {
        $this->adrum = $adrum;

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
            $citoyen->setFamille($this);
        }

        return $this;
    }

    public function removeCitoyen(Citoyen $citoyen): self
    {
        if ($this->citoyens->removeElement($citoyen)) {
            // set the owning side to null (unless already changed)
            if ($citoyen->getFamille() === $this) {
                $citoyen->setFamille(null);
            }
        }

        return $this;
    }
}
