<?php
include"fonctions.php";
define('VAL_MIN', 1);
define('VAL_MAX', 10000);
$a=rand(VAL_MIN,VAL_MAX);
$b=rand(VAL_MIN,VAL_MAX);
echo"generer deux nombres: <br>".$a."<br>".$b."<br>";
echo"Apres permutation on a: <br>";
echo permutation($a,$b);


?>