<?php
include "fonctions.php";
define('VAL_MIN', 1);
define('VAL_MAX', 100);
$nbre=rand(VAL_MIN,VAL_MAX);
echo "<h1>Exercice 1</h1>";
echo "generer un nombre representant le cote d'un carre:".$nbre."<br>";
echo "le perimetre du carre est:".perimetre_carre($nbre)."<br>";
echo "la surface du carre est:".surface_carre($nbre)."<br>";
echo "la diagonale du carre est:".diagonale_carre($nbre); 
?>