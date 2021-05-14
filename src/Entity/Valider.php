<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valider
 *
 * @ORM\Table(name="valider", indexes={@ORM\Index(name="idPersonne", columns={"idPersonne"})})
 * @ORM\Entity
 */
class Valider
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Projet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProjet;

    /**
     * @var int
     *
     * @ORM\Column(name="idPersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpersonne;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    public function getIdProjet(): ?int
    {
        return $this->idProjet;
    }

    public function getIdpersonne(): ?int
    {
        return $this->idpersonne;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }


}
