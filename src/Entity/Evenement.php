<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="fkIdExpert", columns={"IdExpert"}), @ORM\Index(name="fkIdPatient", columns={"IdPatient"})})
 * @ORM\Entity
 */
class Evenement
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
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=30, nullable=false)
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description_event", type="string", length=100, nullable=false)
     */
    private $descriptionEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_event", type="integer", nullable=false)
     */
    private $prixEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_place", type="integer", nullable=false)
     */
    private $nbrPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="valide", type="string", length=255, nullable=false)
     */
    private $valide;

    /**
     * @var int
     *
     * @ORM\Column(name="participants", type="integer", nullable=false)
     */
    private $participants;

    /**
     * @var int
     *
     * @ORM\Column(name="IdPatient", type="integer", nullable=false)
     */
    private $idpatient;

    /**
     * @var \Expert
     *
     * @ORM\ManyToOne(targetEntity="Expert")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdExpert", referencedColumnName="IdExpert")
     * })
     */
    private $idexpert;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
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

    public function getDescriptionEvent(): ?string
    {
        return $this->descriptionEvent;
    }

    public function setDescriptionEvent(string $descriptionEvent): self
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    public function getPrixEvent(): ?int
    {
        return $this->prixEvent;
    }

    public function setPrixEvent(int $prixEvent): self
    {
        $this->prixEvent = $prixEvent;

        return $this;
    }

    public function getNbrPlace(): ?int
    {
        return $this->nbrPlace;
    }

    public function setNbrPlace(int $nbrPlace): self
    {
        $this->nbrPlace = $nbrPlace;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getValide(): ?string
    {
        return $this->valide;
    }

    public function setValide(string $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getParticipants(): ?int
    {
        return $this->participants;
    }

    public function setParticipants(int $participants): self
    {
        $this->participants = $participants;

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
