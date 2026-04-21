<?php
// variabel dan tipe data
$nama = "budi";
$umur = 20;
$tinggi = 179.9;
$hobi = ["membaca","berenang","bermain bola"];

echo "Nama saya $nama, Umur saya $umur, tinggi saya $tinggi, Hobi saya $hobi[2]";
echo "<br><br>===============================<br><br>";

// operator dan kondisi (if else)

//penjumlahan
$nilai1 = 10;
$nilai2 = 20;
$hasil = $nilai1 + $nilai2;

echo "Hasil  penjumlahan $nilai1 + $nilai2 = $hasil";
echo "<br><br>===============================<br><br>";
//pembagian
 
$nilai3 = 10;
$nilai4 = 2;
$hasil_bagi = $nilai3 / $nilai4;
echo "Hasil  pembagian $nilai3 / $nilai4 = $hasil_bagi";
echo "<br><br>===============================<br><br>";
//perkalian

$nilai5 = 10;
$nilai6 = 5;
$hasil_kali = $nilai5 * $nilai6;
echo "Hasil  perkalian $nilai5 * $nilai6 = $hasil_kali";
echo "<br><br>===============================<br><br>";
//pengurangan

$nilai7 = 10;
$nilai8 = 5;
$hasil_kurang = $nilai7 - $nilai8;
echo "Hasil  pengurangan $nilai7 - $nilai8 = $hasil_kurang";
echo "<br><br>===============================<br><br>";


//pengkondisian
$nilai9 = 90;
if ($nilai9 >= 90) {
    echo "Nilai A";
} elseif ($nilai9 >= 80) {
    echo "Nilai B";
} elseif ($nilai9 >= 70) {
    echo "Nilai C";
} else {
    echo "Nilai D";
}

//penentuan ganjil genap
$nilai10 = 15;
if ($nilai10 % 2 == 0) {
    echo "<br><br>Nilai $nilai10 adalah genap";
} else {
    echo "<br><br>Nilai $nilai10 adalah ganjil";
}
echo "<br><br>===============================<br><br>";

echo '<img src="https://www.pngmart.com/files/22/Meme-PNG-Photos.png" alt="" width="200">';

echo "<br><br>===============================<br><br>";

?>