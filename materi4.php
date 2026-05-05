<form action="" method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" name="kirim" value="Submit">
</form>
<?php
include "koneksi.php";
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
   
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "data gagal ditambahkan: " . mysqli_error($koneksi);
    

}
}