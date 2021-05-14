<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Personne;

/**
 * Developpeur
 *
 * @ORM\Table(name="developpeur")
 * @ORM\Entity
 */
class Developpeur extends  Personne
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
     * @ORM\Column(name="specialite", type="string", length=50, nullable=true)
     */
    protected $specialite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="annee_exp", type="date", nullable=true)
     */
    protected $anneeExp;

    public function getIdpersonne(): ?int
    {
        return $this->idpersonne;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(?string $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getAnneeExp(): ?\DateTimeInterface
    {
        return $this->anneeExp;
    }

    public function setAnneeExp(?\DateTimeInterface $anneeExp): self
    {
        $this->anneeExp = $anneeExp;

        return $this;
    }


}
