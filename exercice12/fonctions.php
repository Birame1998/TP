
<link rel="stylesheet" href="CSS2/style2.css">
<body> 
<?php
function mois_francais(string $lang)
{
    echo"<h1>tableau des mois en francais</h1>";
    echo"<table>";
    echo"<tr>";
    echo"<td>Janvier</td>";
    echo"<td>Avril</td>";
    echo"<td>Juillet</td>";
    echo"<td>Octobre</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>Février</td>";
    echo"<td>Mai</td>";
    echo"<td>Aout</td>";
    echo"<td>Novembre</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>Mars</td>";
    echo"<td>Juin</td>";
    echo"<td>Septembre</td>";
    echo"<td>Décembre</td>";
    echo"</tr>";
    echo"</table>";
}
function mois_anglais(string $lang){
    echo"<h1>tableau des mois en anglais</h1>";
    echo"<table>";
    echo"<tr>";
    echo"<td>January</td>";
    echo"<td>April</td>";
    echo"<td>July</td>";
    echo"<td>October</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>February</td>";
    echo"<td>May</td>";
    echo"<td>August</td>";
    echo"<td>November</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>March</td>";
    echo"<td>June</td>";
    echo"<td>September</td>";
    echo"<td>December</td>";
    echo"</tr>";
    echo"</table>";
}

function saisie($lang)
{
    if (isset($_POST["btnok"])) {
        if (empty($_POST["langue"])) {
            mois_francais($lang);
        }else {
            if ($_POST["langue"]=="francais" OR $_POST["langue"]=="fr" OR $_POST["langue"]=="Francais" OR $_POST["langue"]=="FRANCAIS") {
                mois_francais($lang);
            }else {
                if ($_POST["langue"]=="anglais" OR $_POST["langue"]=="ang" OR $_POST["langue"]=="Anglais" OR $_POST["langue"]=="ANGLAIS") {
                    mois_anglais($lang);
                }else {
                    header("location:index.php");
                }
            }
            
        }
    }
}


?>

</body>