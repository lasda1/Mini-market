<?php

/**
 * Created by PhpStorm.
 * User: oussema
 * Date: 12/05/2018
 * Time: 14:14
 */
class ProduitDAO
{
    public function __construct()
    {

    }
    public function ajouterProduit($categorie, $libelle,$prix, $Description, $Qq, $Marque, $Reference, $dispo,$path)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="insert into produit (libelle,prix,description,quantite,marque,reference,disponibilite,id_categorie,image) values ('$libelle',$prix,'$Description','$Qq','$Marque','$Reference',$dispo,$categorie,'$path')";
        $response=null;
        if ($bdd->query($sql) ) {
            $response="done";
        } else {
            $response= "undone" ;
        }
        return $response;
    }
    public function getAllProduitController(){
        $listProduit = array();
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM produit where disponibilite=1');
        $reponse=$reponse->fetchAll();
        foreach ($reponse as $r){
            $produit=new Produit($r['id'],$r['libelle'],$r['prix'],$r['description'],$r['quantite'],$r['marque'],$r['reference'],$r['disponibilite'],$r['image']);
            $produit->setCategorie($r['id_categorie']);
            array_push($listProduit,$produit);
        }

        return $listProduit;
    }public function getAllProduitsController(){
    $listProduit = array();
    $bdd=new GetConnexion();
    $bdd=$bdd->getCon();
    $reponse = $bdd->query('SELECT * FROM produit');
    $reponse=$reponse->fetchAll();
    foreach ($reponse as $r){
        $produit=new Produit($r['id'],$r['libelle'],$r['prix'],$r['description'],$r['quantite'],$r['marque'],$r['reference'],$r['disponibilite'],$r['image']);
        $produit->setCategorie($r['id_categorie']);
        array_push($listProduit,$produit);
    }

    return $listProduit;
}

    public function getAllProduitByCategorieController($id){
        $listProduit = array();
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM produit WHERE disponibilite=1 and id_categorie='.$id);
        $reponse=$reponse->fetchAll();
        foreach ($reponse as $r){
            $produit=new Produit($r['id'],$r['libelle'],$r['prix'],$r['description'],$r['quantite'],$r['marque'],$r['reference'],$r['disponibilite'],$r['image']);
            $produit->setCategorie($r['id_categorie']);
            array_push($listProduit,$produit);
        }

        return $listProduit;
    }

    public function getProductById($id){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM produit where id='.$id);
        return $reponse->fetch();
    }

    public function modifierProduit($id,$libelle, $prix, $Description, $qq, $Marque,$dispo)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="update produit set libelle='$libelle',prix='$prix',description='$Description',quantite='$qq',marque='$Marque',disponibilite='$dispo' WHERE id=$id";
        $response=null;
        if ($bdd->query($sql) ) {
            $response="done";
        } else {
            $response= "undone" ;
        }

        return $response;
    }

    public function deleteProduit($produit)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="delete from produit WHERE id=$produit";
        $response=null;
        if ($bdd->query($sql) ) {
            $response="done";
        } else {
            $response= "undone" ;
        }

        return $response;
    }
    public function getProductDetail($id){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM produit WHERE id='.$id);

        $r=$reponse->fetch();

            $produit=new Produit($r['id'],$r['libelle'],$r['prix'],$r['description'],$r['quantite'],$r['marque'],$r['reference'],$r['disponibilite'],$r['image']);
            $produit->setCategorie($r['id_categorie']);
            return $produit;
    }


}