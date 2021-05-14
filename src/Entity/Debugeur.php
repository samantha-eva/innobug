<?php

namespace App\Entity;
use App\Entity\Personne;
 
use Doctrine\ORM\Mapping as ORM;

/**
 * Debugeur
 *
 * @ORM\Table(name="debugeur")
 * @ORM\Entity
 */
class Debugeur extends Personne
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
     * @ORM\Column(name="statut", type="string", length=50, nullable=true)
     */
    protected $statut;

   /*  public function getIdpersonne(): ?int
    {
        return $this->idpersonne;
    }  */

    public function getIdpersonne(): ?int
    {
        return parent::getIdpersonne();
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
