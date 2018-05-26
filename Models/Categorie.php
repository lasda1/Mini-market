<?php

/**
 * Created by PhpStorm.
 * User: oussema
 * Date: 06/05/2018
 * Time: 23:13
 */
class Categorie
{
    private $id;
    private $libelle;

    /**
     * Categorie constructor.
     * @param $id
     * @param $libelle
     */
    public function __construct()
    {

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
    function debug_to_console( $data ) {
        $output = $data;
        if ( is_array( $output ) )
            $output = implode( ',', $output);

        echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
    }


}