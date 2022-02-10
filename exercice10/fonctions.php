<?php
function champs(int $N)
{
    $i=1;
    while ($i <= $N) {
        echo"<ul>
        <li><input type='text'></li>
        </ul>";
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
                champs($N);
            }else {
                header("location:index.php");
            }
        }
    }
}
?>