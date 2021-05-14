<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Personne;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client extends Personne
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPersonne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $idpersonne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut_societe", type="string", length=50, nullable=true)
     */
    private $statutSociete;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_contact", type="string", length=50, nullable=true)
     */
    protected $nomContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenon_contact", type="string", length=50, nullable=true)
     */
    protected $prenonContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_contact", type="string", length=50, nullable=true)
     */
    protected $emailContact;

    public function getIdpersonne(): ?int
    {
        return $this->idpersonne;
    }

    public function getStatutSociete(): ?string
    {
        return $this->statutSociete;
    }

    public function setStatutSociete(?string $statutSociete): self
    {
        $this->statutSociete = $statutSociete;

        return $this;
    }

    public function getNomContact(): ?string
    {
        return $this->nomContact;
    }

    public function setNomContact(?string $nomContact): self
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    public function getPrenonContact(): ?string
    {
        return $this->prenonContact;
    }

    public function setPrenonContact(?string $prenonContact): self
    {
        $this->prenonContact = $prenonContact;

        return $this;
    }

    public function getEmailContact(): ?string
    {
        return $this->emailContact;
    }

    public function setEmailContact(?string $emailContact): self
    {
        $this->emailContact = $emailContact;

        return $this;
    }


}
