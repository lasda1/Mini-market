<?php

class CategorieDAO
{

    /**
     * CategorieDAO constructor.
     */
    public function __construct()
    {

    }

    public function ajouterCategorieController($libelle){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="insert into categorie (libelle) values ('$libelle')";
        $bdd->exec($sql);

    }
    public function getAllCategorieController(){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM categorie');
        return $reponse->fetchAll();
    }

    public function modifierCategorieController($categorie, $libelle)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="update categorie set libelle='$libelle' WHERE id=$categorie";
        $response=null;
        if ($bdd->query($sql) ) {
            $response="done";
        } else {
            $response= "undone" ;
        }

        return $response;
    }

    public function deleteCategorieController($produit)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="delete from categorie WHERE id=$produit";
        $response=null;
        if ($bdd->query($sql) ) {
            $response="done";
        } else {
            $response= "undone" ;
        }

        return $response;
    }

    public function ajouterContact($name, $email, $msg)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="insert into contact (nom_user,email,message) values ('$name','$email','$msg')";
        $bdd->exec($sql);
    }

    public function ajouterOpinion($name, $msg)
    {
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $sql="insert into avis (nom_user,message) values ('$name','$msg')";
        $bdd->exec($sql);
    }


}



