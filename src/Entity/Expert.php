<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expert
 *
 * @ORM\Table(name="expert")
 * @ORM\Entity
 */
class Expert
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdExpert", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idexpert;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=25, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=25, nullable=false)
     */
    private $profession;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseMail", type="string", length=50, nullable=false)
     */
    private $adressemail;

    public function getIdexpert(): ?int
    {
        return $this->idexpert;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdressemail(): ?string
    {
        return $this->adressemail;
    }

    public function setAdressemail(string $adressemail): self
    {
        $this->adressemail = $adressemail;

        return $this;
    }


}
