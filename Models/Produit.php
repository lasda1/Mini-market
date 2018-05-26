<?php

/**
 * Created by PhpStorm.
 * User: oussema
 * Date: 14/05/2018
 * Time: 16:54
 */
class Produit
{
    private $id;
    private $libelle;
    private $prix;
    private $description;
    private $quantite;
    private $marque;
    private $reference;
    private $disponibilite;
    private $categorie;
    private $image;
    /**
     * Produit constructor.
     * @param $id
     * @param $libelle
     * @param $prix
     * @param $description
     * @param $quantite
     * @param $marque
     * @param $reference
     * @param $disponibilite
     */
    public function __construct($id, $libelle, $prix, $description, $quantite, $marque, $reference, $disponibilite,$image)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->description = $description;
        $this->quantite = $quantite;
        $this->marque = $marque;
        $this->reference = $reference;
        $this->disponibilite = $disponibilite;
        $this->image=$image;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }

    /**
     * @return Categorie
     */
    public function getCategorie()
    {


        return $this->categorie;
    }

    /**
     * @param Categorie $categorie
     */
    public function setCategorie($id)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM categorie where id='.$id);
        $reponse=$reponse->fetch();
        $cat=new Categorie();
        $cat->setId($id);
        $cat->setLibelle($reponse['libelle']);
        $this->categorie = $cat;
    }




}