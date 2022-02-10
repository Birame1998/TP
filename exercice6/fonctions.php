<?php
function equation_premier_degre(int|float $a,int|float $b):void
{
    if ($a==0.0) {
        if ($b==0.0) {
            echo"l'equation est indeterminee <br>";
        }else {
            echo"l'equation est impossible <br>";
        }
    }else {
        echo"la solution de l'equation est: ".-1*$b/$a;
    }
}
function equation_second_degre(int|float $a,int|float $b,int|float $c)
{
    $delta=pow($b,2)-4*$a*$c;
    if ($a==0.0) {
        if ($b==0.0) {
            if ($c==0.0){
                echo"l'equation est indeterminee <br>";
            }else {
                echo"l'equation est impossible das<br>";
            }
        }else {
            equation_premier_degre($b,$c);
        }
    }else {
        if ($delta<0.0) {
            echo"l'equation est impossible <br>";
        }elseif ($delta==0) {
            echo"la solution de l'equation est: ".-1*$b/2*$a;
        }else {
            echo"les solutions de l'equation sont: ". (-1*$b+sqrt($delta))/2*$a." et ".(-1*$b-sqrt($delta))/2*$a;
        }
    }
}

function testValid($a,$b,$c)
{
    if (isset($_POST["btnok"])) {
        if (empty($_POST["a"]) OR empty($_POST["b"]) OR empty($_POST["c"])) {
            header("location:index.php");
        }
        else {
         if (is_numeric($_POST["a"]) && is_numeric($_POST["b"]) && is_numeric($_POST["c"])) {
             equation_second_degre($a,$b,$c);
         }
         
         else {
             header("location:index.php");
         }
        }
    }
}

?>