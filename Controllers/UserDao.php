<?php

/**
 * Created by PhpStorm.
 * User: oussema
 * Date: 24/05/2018
 * Time: 01:23
 */
class UserDao
{
    public function verifUser($nom,$password){
        $bdd=new GetConnexion();
        $bdd=$bdd->getCon();
        $reponse = $bdd->query('SELECT * FROM users where id=1');
        $r=$reponse->fetch();
        if(!$r)
            return false;

        if($r['pseudo']===$nom and $r['password']===$password){
            return true;
        }else
            return false;

    }
}