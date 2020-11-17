<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $libelleCategorie;

    /**
     * @ORM\OneToMany(targetEntity=InscriptionSolo::class, mappedBy="categorie", orphanRemoval=true)
     */
    private $inscriptionSolos;

    public function __construct()
    {
        $this->inscriptionSolos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCategorie(): ?string
    {
        return $this->libelleCategorie;
    }

    public function setLibelleCategorie(string $libelleCategorie): self
    {
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }

    /**
     * @return Collection|InscriptionSolo[]
     */
    public function getInscriptionSolos(): Collection
    {
        return $this->inscriptionSolos;
    }

    public function addInscriptionSolo(InscriptionSolo $inscriptionSolo): self
    {
        if (!$this->inscriptionSolos->contains($inscriptionSolo)) {
            $this->inscriptionSolos[] = $inscriptionSolo;
            $inscriptionSolo->setCategorie($this);
        }

        return $this;
    }

    public function removeInscriptionSolo(InscriptionSolo $inscriptionSolo): self
    {
        if ($this->inscriptionSolos->removeElement($inscriptionSolo)) {
            // set the owning side to null (unless already changed)
            if ($inscriptionSolo->getCategorie() === $this) {
                $inscriptionSolo->setCategorie(null);
            }
        }

        return $this;
    }
}
