<?php
function distance_points(int|float $a,int|float $b,int|float $c,int|float $d):float
{
    return sqrt(pow($a-$c,2)+pow($b-$d,2));
}
?>