<?php
include"fonctions.php";
define('VAL_MIN', 1);
define('VAL_MAX', 10000);
$a=rand(VAL_MIN,VAL_MAX);
$b=rand(VAL_MIN,VAL_MAX);
echo"generer deux nombres: ".$a." ".$b."<br>";
echo"la somme de ".$a." et ".$b." est : ".somme($a,$b)."<br>";
echo"l'exponentiel de ".$a." et ".$b." est : ".exponentiel($a,$b)."<br>";
echo"la diffrence de ".$a." et ".$b." est : ".difference($a,$b)."<br>";
echo"le produit de ".$a." et ".$b." est : ".produit($a,$b)."<br>";
echo"le modulo de ".$a." et ".$b." est : ".modulo($a,$b)."<br>";
echo"la division de ".$a." et ".$b." est : ".division($a,$b)."<br>";
echo"le carre de ".$a." est : ".carre($a)."<br>";
echo"la somme de ".$b." est : ".carre($b);
?>