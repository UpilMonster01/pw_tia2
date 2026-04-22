//fungtion
<?php
function hitungPersegi($sisi) {
    $luas = $sisi * $sisi;
    $keliling = 4 * $sisi;

    echo "Sisi: $sisi <br>";
    echo "Luas: $luas <br>";
    echo "Keliling: $keliling";
}

hitungPersegi(5);
?>