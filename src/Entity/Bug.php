<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bug
 *
 * @ORM\Table(name="bug", indexes={@ORM\Index(name="idTicket", columns={"idTicket"}), @ORM\Index(name="idNiveau", columns={"idNiveau"})})
 * @ORM\Entity
 */
class Bug
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBug", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbug;

    /**
     * @var int
     *
     * @ORM\Column(name="idNiveau", type="integer", nullable=false)
     */
    private $idniveau;

    /**
     * @var int
     *
     * @ORM\Column(name="idTicket", type="integer", nullable=false)
     */
    private $idticket;

    public function getIdbug(): ?int
    {
        return $this->idbug;
    }

    public function getIdniveau(): ?int
    {
        return $this->idniveau;
    }

    public function setIdniveau(int $idniveau): self
    {
        $this->idniveau = $idniveau;

        return $this;
    }

    public function getIdticket(): ?int
    {
        return $this->idticket;
    }

    public function setIdticket(int $idticket): self
    {
        $this->idticket = $idticket;

        return $this;
    }


}
