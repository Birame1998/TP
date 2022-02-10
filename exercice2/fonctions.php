<?php
function perimetre_rectangle($longueur,$largeur)
{
    return ($longueur+$largeur)*2;
}
function surface_rectangle($longueur,$largeur)
{
    return $longueur*$largeur;
}
function diagonale_rectangle($longueur,$largeur)
{
    return sqrt(pow($longueur,2)+pow($largeur,2));
}
?>