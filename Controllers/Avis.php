<?php

/**
 * Created by PhpStorm.
 * User: oussema
 * Date: 14/05/2018
 * Time: 18:11
 */
class Avis
{
    /**
     * Avis constructor.
     */
    public function __construct()
    {
    }

    public function getAllAvisController(){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM avis');
        return $reponse->fetchAll();
    }
    public function getAllContactController(){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM contact');
        return $reponse->fetchAll();
    }



}