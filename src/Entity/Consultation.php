<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultation
 *
 * @ORM\Table(name="consultation", indexes={@ORM\Index(name="patient", columns={"idPatient"}), @ORM\Index(name="expertfk", columns={"idExpert"})})
 * @ORM\Entity
 */
class Consultation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="temps", type="string", length=11, nullable=false)
     */
    private $temps;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation", type="string", length=5, nullable=false, options={"default"="'NON'"})
     */
    private $confirmation = '\'NON\'';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatient", referencedColumnName="ID_patient")
     * })
     */
    private $idpatient;

    /**
     * @var \Expert
     *
     * @ORM\ManyToOne(targetEntity="Expert")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idExpert", referencedColumnName="IdExpert")
     * })
     */
    private $idexpert;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTemps(): ?string
    {
        return $this->temps;
    }

    public function setTemps(string $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdpatient(): ?Patient
    {
        return $this->idpatient;
    }

    public function setIdpatient(?Patient $idpatient): self
    {
        $this->idpatient = $idpatient;

        return $this;
    }

    public function getIdexpert(): ?Expert
    {
        return $this->idexpert;
    }

    public function setIdexpert(?Expert $idexpert): self
    {
        $this->idexpert = $idexpert;

        return $this;
    }


}
