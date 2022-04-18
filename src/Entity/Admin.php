<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity
 */
class Admin
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAdmin", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadmin;

    /**
     * @var int
     *
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="prenom", type="integer", nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="adresseMail", type="integer", nullable=false)
     */
    private $adressemail;

    /**
     * @var int
     *
     * @ORM\Column(name="password", type="integer", nullable=false)
     */
    private $password;

    public function getIdadmin(): ?int
    {
        return $this->idadmin;
    }

    public function getNom(): ?int
    {
        return $this->nom;
    }

    public function setNom(int $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?int
    {
        return $this->prenom;
    }

    public function setPrenom(int $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdressemail(): ?int
    {
        return $this->adressemail;
    }

    public function setAdressemail(int $adressemail): self
    {
        $this->adressemail = $adressemail;

        return $this;
    }

    public function getPassword(): ?int
    {
        return $this->password;
    }

    public function setPassword(int $password): self
    {
        $this->password = $password;

        return $this;
    }


}
