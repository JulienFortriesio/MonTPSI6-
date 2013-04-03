<?php
class repertoire {
    /**Créé une liste qui contiendra les informations*/
    private $liste = array();
    
    function __construct($liste) {
        $this->liste = $liste;
    }
    
    public function afficherRepertoire()
            /**Parcourir le tableau liste et affiche les données de chaque 
             * personne.
             */
    {
        foreach($this->liste as $pers)
        {
            $pers->afficherPersonne();
        }
    }
   
    

}
?>
