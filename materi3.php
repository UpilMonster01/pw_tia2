<?php
function hello(){
    echo "selamat datang <br>";
}
hello();



function tambah($a, $b) {
    return $a + $b;
}

function kali($a, $b) {
    return $a * $b;
}

function kurang($a, $b) {
    return $a - $b;
}

function bagi($a, $b) {
    if ($b == 0) {
        return "Tidak bisa dibagi 0";
    }
    return $a / $b;
}
?>

<form method="POST">
    <input type="number" name="angka1" required>
    <input type="number" name="angka2" required>
    <br><br>

    <button type="submit" name="tambah">Tambah</button>
    <button type="submit" name="kali">Kali</button>
    <button type="submit" name="kurang">Kurang</button>
    <button type="submit" name="bagi">Bagi</button>
</form>

<?php
if (isset($_POST['angka1']) && isset($_POST['angka2'])) {
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];

    if (isset($_POST['tambah'])) {
        echo "Hasil: " . tambah($a, $b);
    } elseif (isset($_POST['kali'])) {
        echo "Hasil: " . kali($a, $b);
    } elseif (isset($_POST['kurang'])) {
        echo "Hasil: " . kurang($a, $b);
    } elseif (isset($_POST['bagi'])) {
        echo "Hasil: " . bagi($a, $b);
    }
}
?>