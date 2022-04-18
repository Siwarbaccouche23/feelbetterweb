<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="fkIdPatient", columns={"IdPatient"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanier;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="nbre_de_produit", type="integer", nullable=false)
     */
    private $nbreDeProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="IdPatient", type="integer", nullable=false)
     */
    private $idpatient;

    public function getIdPanier(): ?int
    {
        return $this->idPanier;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getNbreDeProduit(): ?int
    {
        return $this->nbreDeProduit;
    }

    public function setNbreDeProduit(int $nbreDeProduit): self
    {
        $this->nbreDeProduit = $nbreDeProduit;

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
