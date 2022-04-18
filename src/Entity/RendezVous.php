<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="rendez_vous", indexes={@ORM\Index(name="fkIdPatient", columns={"IdPatient"}), @ORM\Index(name="fkIdExpert", columns={"IdExpert"})})
 * @ORM\Entity
 */
class RendezVous
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rendez_vous", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRendezVous;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=30, nullable=false)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="IdExpert", type="integer", nullable=false)
     */
    private $idexpert;

    /**
     * @var int
     *
     * @ORM\Column(name="IdPatient", type="integer", nullable=false)
     */
    private $idpatient;

    public function getIdRendezVous(): ?int
    {
        return $this->idRendezVous;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getIdexpert(): ?int
    {
        return $this->idexpert;
    }

    public function setIdexpert(int $idexpert): self
    {
        $this->idexpert = $idexpert;

        return $this;
    }

    public function getIdpatient(): ?int
    {
        return $this->idpatient;
    }

    public function setIdpatient(int $idpatient): self
    {
        $this->idpatient = $idpatient;

        return $this;
    }


}
