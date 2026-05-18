<?php
// variabel dan tipe data
$nama = "budi";
$umur = 20;
$tinggi = 179.9;
$hobi = ["membaca","berenang","bermain bola"];

// operator
$nilai1 = 10; $nilai2 = 20; $hasil = $nilai1 + $nilai2;
$nilai3 = 10; $nilai4 = 2;  $hasil_bagi = $nilai3 / $nilai4;
$nilai5 = 10; $nilai6 = 5;  $hasil_kali = $nilai5 * $nilai6;
$nilai7 = 10; $nilai8 = 5;  $hasil_kurang = $nilai7 - $nilai8;

// kondisi grade
$nilai9 = 90;
if ($nilai9 >= 90) $grade = "Nilai A";
elseif ($nilai9 >= 80) $grade = "Nilai B";
elseif ($nilai9 >= 70) $grade = "Nilai C";
else $grade = "Nilai D";

// ganjil genap
$nilai10 = 15;
$paritas = ($nilai10 % 2 == 0) ? "Genap" : "Ganjil";

echo '
<style>
  body { font-family: sans-serif; background: #f5f5f3; padding: 2rem; color: #1a1a1a; }
  .wrap { max-width: 560px; }
  .section-title { font-size: 11px; font-weight: 500; color: #999; letter-spacing: 0.08em; text-transform: uppercase; margin: 1.5rem 0 8px; }
  .card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 1rem 1.25rem; margin-bottom: 8px; }
  .card-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px; }
  .card-row:last-child { margin-bottom: 0; }
  .label { font-size: 13px; color: #666; }
  .value { font-size: 14px; font-weight: 500; }
  .badge { font-size: 12px; padding: 3px 10px; border-radius: 6px; font-weight: 500; background: #EAF3DE; color: #3B6D11; }
  .badge-warn { background: #FAEEDA; color: #854F0B; }
  .math-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
  .math-card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 0.9rem 1rem; }
  .math-op { font-size: 11px; color: #999; margin: 0 0 4px; }
  .math-expr { font-size: 14px; color: #666; margin: 0 0 2px; }
  .math-result { font-size: 20px; font-weight: 500; margin: 0; }
  .hobi-list { display: flex; gap: 6px; flex-wrap: wrap; margin-top: 6px; }
  .hobi-tag { font-size: 12px; background: #f5f5f3; border: 0.5px solid #ddd; border-radius: 6px; padding: 3px 10px; color: #666; }
  .meme-box { border-radius: 12px; overflow: hidden; border: 0.5px solid #ddd; display: inline-block; }
</style>
<div class="wrap">
';

// === Variabel & Tipe Data ===
echo '<p class="section-title">Variabel &amp; Tipe Data</p>';
echo '<div class="card">';
echo "<div class='card-row'><span class='label'>Nama</span><span class='value'>$nama</span></div>";
echo "<div class='card-row'><span class='label'>Umur</span><span class='value'>$umur</span></div>";
echo "<div class='card-row'><span class='label'>Tinggi</span><span class='value'>$tinggi</span></div>";
echo "<div style='border-top:0.5px solid #ddd; padding-top:8px;'><span class='label'>Hobi</span><div class='hobi-list'>";
foreach ($hobi as $h) echo "<span class='hobi-tag'>$h</span>";
echo "</div></div></div>";

// === Operator ===
echo '<p class="section-title">Operator Aritmatika</p>';
echo '<div class="math-grid">';
echo "<div class='math-card'><p class='math-op'>Penjumlahan</p><p class='math-expr'>$nilai1 + $nilai2</p><p class='math-result'>= $hasil</p></div>";
echo "<div class='math-card'><p class='math-op'>Pembagian</p><p class='math-expr'>$nilai3 / $nilai4</p><p class='math-result'>= $hasil_bagi</p></div>";
echo "<div class='math-card'><p class='math-op'>Perkalian</p><p class='math-expr'>$nilai5 × $nilai6</p><p class='math-result'>= $hasil_kali</p></div>";
echo "<div class='math-card'><p class='math-op'>Pengurangan</p><p class='math-expr'>$nilai7 − $nilai8</p><p class='math-result'>= $hasil_kurang</p></div>";
echo '</div>';

// === Kondisi ===
echo '<p class="section-title">Kondisi</p>';
echo '<div class="card">';
echo "<div class='card-row'><span class='label'>Nilai <strong>$nilai9</strong> → Grade</span><span class='badge'>$grade</span></div>";
echo "<div class='card-row'><span class='label'>Nilai <strong>$nilai10</strong> → Ganjil/Genap</span><span class='badge badge-warn'>$paritas</span></div>";
echo '</div>';

// === Gambar ===
echo '<p class="section-title">Gambar</p>';
echo '<div class="meme-box"><img src="https://www.pngmart.com/files/22/Meme-PNG-Photos.png" alt="meme" width="200"></div>';

echo '</div>';
?>