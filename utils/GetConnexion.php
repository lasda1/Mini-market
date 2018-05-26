<?php

/**
 * Created by PhpStorm.
 * User: oussema
 * Date: 06/05/2018
 * Time: 23:31
 */
class GetConnexion
{

    /**
     * GetConnexion constructor.
     */
    public function __construct()
    {
    }
    public function getCon(){
        try
        {
            // On se connecte à MySQL
            $bdd = new PDO('mysql:host=localhost;dbname=info_market;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
        }
        return $bdd;
    }
}