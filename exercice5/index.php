<?php
include"fonctions.php";
define('VAL_MIN', 1.0);
define('VAL_MAX', 10.0);
$a=rand(VAL_MIN,VAL_MAX);
$b=rand(VAL_MIN,VAL_MAX);
$c=rand(VAL_MIN,VAL_MAX);
$d=rand(VAL_MIN,VAL_MAX);
echo"generer le premier point <br>";
echo "abscisse: ".$a."<br>ordonnee: ".$b."<br>";
echo"generer le second point <br>";
echo "abscisse: ".$c."<br>ordonnee: ".$d."<br>";
echo"la distance entre ces points est: ". distance_points($a,$b,$c,$d);
?>