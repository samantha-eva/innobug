<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="types", type="string")
 * @ORM\DiscriminatorMap({"debugeur" = "Debugeur", "developpeur"= "Developpeur","client"= "Client" })
 */
abstract class Personne implements UserInterface
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=false)
     */
    protected $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    protected $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    protected $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    protected $adresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    protected $telephone;

    /** 
     * @ORM\Column(type="json") 
     */
    protected $roles = [];

   

    public function getIdpersonne(): ?int
    {
        return $this->idpersonne;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    // public function getRoles()
    // {
    //     return[
    //         'ROLE_USER'
    //     ];
    // }

    public function getRoles(): array
    {
        $roles = $this->roles;

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

  
    public function getSalt() {}

    public function eraseCredentials() {}


}
