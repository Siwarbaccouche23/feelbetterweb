<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="fkIdShopOwner", columns={"IdShopOwner"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idproduit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var int
     *
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer", nullable=false)
     */
    private $reference;

    /**
     * @var int
     *
     * @ORM\Column(name="quantitÃ©", type="integer", nullable=false)
     */
    private $quantitã©;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="image", type="integer", nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="discreption", type="integer", nullable=false)
     */
    private $discreption;

    /**
     * @var int
     *
     * @ORM\Column(name="IdShopOwner", type="integer", nullable=false)
     */
    private $idshopowner;

    public function getIdproduit(): ?int
    {
        return $this->idproduit;
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

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getQuantitã©(): ?int
    {
        return $this->quantitã©;
    }

    public function setQuantitã©(int $quantitã©): self
    {
        $this->quantitã© = $quantitã©;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImage(): ?int
    {
        return $this->image;
    }

    public function setImage(int $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDiscreption(): ?int
    {
        return $this->discreption;
    }

    public function setDiscreption(int $discreption): self
    {
        $this->discreption = $discreption;

        return $this;
    }

    public function getIdshopowner(): ?int
    {
        return $this->idshopowner;
    }

    public function setIdshopowner(int $idshopowner): self
    {
        $this->idshopowner = $idshopowner;

        return $this;
    }


}
