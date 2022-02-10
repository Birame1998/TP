<?php
function nombre_premier(int $N):bool
{
    $v=true;
    $i=2;
    while ($i < $N && $v) {
        if ($N%$i==0) {
            $v=false;
        }
        $i++;
    }
    return $v;
}
function superieur_moyenne(int $i,int $N):bool{
    $v=false;
    if ($i < $N && $v) {
        if ($i>$N/2) {
            $v=true;
        }
    }
    return $v;
}
function inferieur_moyenne(int $i,int $N):bool{
    $v=false;
    if ($i < $N && $v) {
        if ($i<$N/2) {
            $v=true;
        }
    }
    return $v;
}








function test_valide($N)
{
    if (isset($_POST["btnok"])) {
        if (empty($N)) {
            header("location:index.php");
        }else {
            if (is_numeric($N) && $N>10000) {
                echo"bonjour";
            }else {
                header("location:index.php");
            }
        }
    }
}


?>