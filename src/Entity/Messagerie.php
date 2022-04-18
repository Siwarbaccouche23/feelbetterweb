<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 *
 * @ORM\Table(name="messagerie", indexes={@ORM\Index(name="fkIdPatient", columns={"IdPatient"}), @ORM\Index(name="fkIdExpert", columns={"IdExpert"})})
 * @ORM\Entity
 */
class Messagerie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_envoi", type="date", nullable=false)
     */
    private $dateEnvoi;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=100, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_recep", type="date", nullable=false)
     */
    private $dateRecep;

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

    public function getIdMessage(): ?int
    {
        return $this->idMessage;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(\DateTimeInterface $dateEnvoi): self
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateRecep(): ?\DateTimeInterface
    {
        return $this->dateRecep;
    }

    public function setDateRecep(\DateTimeInterface $dateRecep): self
    {
        $this->dateRecep = $dateRecep;

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
