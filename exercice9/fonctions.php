<?php
function table_de_multiplication($N)
{
    $i=1;
    while ($i <= 10) {
        echo$N."*".$i."=".$N*$i."<br>";
$i++;
    }
}
function test_valide($N)
{
    if (isset($_POST["btnok"])) {
        if (empty($N)) {
            header("location:index.php");
        }else {
            if (is_numeric($N) && $N>0) {
                table_de_multiplication($N);
            }else {
                header("location:index.php");
            }
        }
    }
}

?>