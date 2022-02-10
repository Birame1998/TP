<?php
include "fonctions.php";
define('VAL_MIN', 1);
define('VAL_MAX', 100);
$longueur=rand(40,VAL_MAX);
$largeur=rand(VAL_MIN,40);
echo"<h1>Exercice 2</h1>";
echo"generer un nombre representant la longueur d'un rectangle: ".$longueur."<br>";
echo"generer un nombre representant la largeur d'un rectangle: ".$largeur."<br>";
echo "le perimetre du rectangle est: ".perimetre_rectangle($longueur,$largeur)."<br>";
echo "la surface du rectangle est: ".surface_rectangle($longueur,$largeur)."<br>";
echo "la diagonale du rectangle est: ".diagonale_rectangle($longueur,$largeur);  
?>