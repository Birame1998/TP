<?php
function nombre_de_jours(int $j,int $m,int $a):int
{
 if ($m<1 OR $m>12 && $a<0) {
     $j=-1;
 }
 if ($m==2) {
    $j=28; 
    if ($a%4==0 && $a%100!=0 OR $a%400==0) {
         $j=29;
     }
     
 }else {
     if ($m==4 OR $m==6 OR $m==9 OR $m==11) {
         $j=30;
     }else {
         $j=31;
     }
 }
 return $j;
}
function date_valide(int $j,int $m,int $a):bool
{
    return $j>=1 && $j<=nombre_de_jours($j,$m,$a);
}
function date_suivante($j,$m,$a):void
{
    if (date_valide($j,$m,$a)) {
        if ($j==nombre_de_jours($j,$m,$a)) {
            $j=1;
            if ($m==12) {
                $m=1;
                $a+=1;
            }else{
                $m+=1;
            }
        }else {
            $j+=1;
        }
    }
    echo"la date suivante est: ".$j."/".$m."/".$a."<br>";
}
function date_precedente($j,$m,$a):void
{
    if (date_valide($j,$m,$a)) {
        if ($j==1) {
            if ($m==1) {
                $m=12;
                $j=31;
                $a-=1;
            }else {
                $m-=1;
                $j=nombre_de_jours($j,$m,$a);
            }
            }else {
                $j-=1;
            }
    }
    echo"la date precedente est: ".$j."/".$m."/".$a;
}
function test_valide($j,$m,$a)
{
    if (isset($_POST["btnok"])) {
        if (empty($_POST["jour"]) OR empty($_POST["mois"] OR empty($_POST["annee"]))) {
            header("location:index.php");
        }else {
            if (is_numeric($_POST["jour"]) && is_numeric($_POST["mois"]) && is_numeric($_POST["annee"])) {
                if (date_valide($j,$m,$a)) {
                    date_suivante($j,$m,$a);
                    date_precedente($j,$m,$a);
                }else {
                    header("location:index.php");
                }
            }else {
                header("location:index.php");
            }
        }
    }else {
        header("location:index.php");
    }
}

?>