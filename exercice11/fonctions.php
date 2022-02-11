
<html lang="en">
<head>
    <title>Resultat</title>
    <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
<?php
function nombre_premier(int $N):bool
{
    $count=2;
    for($i=2;$i<=$N/2;$i++){
        if ($N%$i==0) {
            $count++;
            break;
        }
    }
    return $count==2 && $N!=1;
}
function moyenne(int $N):float
{
    $som=0;
    for($i=1;$i<$N+1;$i++){
        $som+=$i;
    }
    return$som/$N;
}
function recupere_elements_supmoy($N):array
{
    $tab=array();
    for($i=1;$i<$N+1;$i++){
        if ($i>moyenne($N)) {
            $tab[]=$i;
        }
    }
    return $tab;

}
function recupere_elements_infmoy($N):array
{
    $tab=array();
    for($i=1;$i<$N+1;$i++){
        if ($i<moyenne($N)) {
            $tab[]=$i;
        }
    }
    return $tab;

}
function recupere_elements_premiers($N):array
{
    $tab=array();
    for($i=1;$i<$N+1;$i++){
        if (nombre_premier($i)) {
            $tab[]=$i;
        }
    }
    return $tab;
}
function affichage_tableau(array $tab):string
{
    $taille=count($tab);
    $afficher="<table>";
    for($i=1;$i<=$taille;$i++){
        if ($i%30==1) {
            $afficher.="<tr>";
        }
        $afficher.="<td>".$tab[$i-1]."</td>";
        if ($i%30==0) {
            $afficher.="</tr>";
        } 
    }
    $afficher.="</table>";
    return $afficher;
}
function test_valide($N)
{
    if (isset($_POST["btnok"])) {
        if (empty($_POST["nombre"])) {
            header("location:index.php");
        }else {
            if (is_numeric($_POST["nombre"]) && $_POST["nombre"]>10000) {
                echo "<h1>tableau des nombres premiers</h1>";
                echo affichage_tableau(recupere_elements_premiers($N));
                echo "<h1>tableau des nombres superieurs a la moyenne</h1>";
                echo affichage_tableau(recupere_elements_supmoy($N));
                echo "<h1>tableau des nombres inferieurs a la moyenne</h1>";
                echo affichage_tableau(recupere_elements_infmoy($N));
            }else {
                header("location:index.php");
            }
        }
    }
}


?>    
</body>
</html>
