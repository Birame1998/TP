<?php
function perimetre_carre($cote)
{   
    return $cote*4;
}
function surface_carre($cote)
{
    return $cote*$cote;
}
function diagonale_carre($cote)
{
    return sqrt(pow($cote,2)*2);
}
?>