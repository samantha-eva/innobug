<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="idPersonne", columns={"idPersonne"}), @ORM\Index(name="idStatut", columns={"idStatut"}), @ORM\Index(name="Id_Projet", columns={"Id_Projet"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTicket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idticket;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_ticket", type="date", nullable=true)
     */
    private $dateTicket;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut_acteul_id", type="integer", nullable=true)
     */
    private $statutActeulId;

    /**
     * @var int
     *
     * @ORM\Column(name="idStatut", type="integer", nullable=false)
     */
    private $idstatut;

    /**
     * @var int
     *
     * @ORM\Column(name="idPersonne", type="integer", nullable=false)
     */
    private $idpersonne;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Projet", type="integer", nullable=false)
     */
    private $idProjet;

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateTicket(): ?\DateTimeInterface
    {
        return $this->dateTicket;
    }

    public function setDateTicket(?\DateTimeInterface $dateTicket): self
    {
        $this->dateTicket = $dateTicket;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatutActeulId(): ?int
    {
        return $this->statutActeulId;
    }

    public function setStatutActeulId(?int $statutActeulId): self
    {
        $this->statutActeulId = $statutActeulId;

        return $this;
    }

    public function getIdstatut(): ?int
    {
        return $this->idstatut;
    }

    public function setIdstatut(int $idstatut): self
    {
        $this->idstatut = $idstatut;

        return $this;
    }

    public function getIdpersonne(): ?int
    {
        return $this->idpersonne;
    }

    public function setIdpersonne(int $idpersonne): self
    {
        $this->idpersonne = $idpersonne;

        return $this;
    }

    public function getIdProjet(): ?int
    {
        return $this->idProjet;
    }

    public function setIdProjet(int $idProjet): self
    {
        $this->idProjet = $idProjet;

        return $this;
    }


}
