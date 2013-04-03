<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require("personne.php");
            require("repertoire.php");
            
            $a= new personne("Toto", "toto@gmail.com", "0123654789");
            $b= new personne("titi", "titi@yahoo.fr", "78945612330");
            
            $r= new repertoire(array($a,$b));
            
            $r->afficherRepertoire();
        // put your code here
        ?>
    </body>
</html>
