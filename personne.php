<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personne
 *
 * @author Clem
 */
class personne {
    private $nom;
    private $email;
    private $notel;
    
    function __construct($nom, $email, $notel) {
        /** Constructeur  permettant de relever des paramétre*/
        $this->nom = $nom;
        $this->email = $email;
        $this->notel = $notel;
    }
    
    public function afficherPersonne()
            /**Permet d'afficher les données d'email et de numéro de telephone
             * correspondantes à la personne
             */
    {
        echo "$this->nom : $this->email , $this->notel <br/>";
    }
    
    public function AffichageEmail()
            /**Permet d'afficher une adresse email*/
    {
        echo "$this->email <br>";
    }

}

?>
