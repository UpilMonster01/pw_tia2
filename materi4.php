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
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
<?php
$query = "SELECT * FROM user";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>";
    echo "<a href='materi4.php?id=" . $row['id'] . "'>Hapus</a> | ";
    echo "<a href='materi4.php?edit=" . $row['id'] . "'>Edit</a>";
    echo "</td>";
    echo "</tr>";
}
// Hapus data ------------------------
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM user WHERE id = '$id'";
    if (mysqli_query($koneksi, $deleteQuery)) {
        echo "Data berhasil dihapus!";
    } else {
        echo "Data gagal dihapus: " . mysqli_error($koneksi);
    }
}
// Edit data ------------------------
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM user WHERE id = '$id'";
    $editResult = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($editResult);

    $username = $row['username'];
    $password = $row['password'];
    $nama = $row['nama'];
    $email = $row['email'];
    
    echo "<form action='' method='POST'>";
    echo "Username: <input type='text' name='username' value='" . $username . "' required><br>";
    echo "Password: <input type='password' name='password' value='" . $password . "' required><br>";
    echo "Nama: <input type='text' name='nama' value='" . $nama . "' required><br>";       
    echo "Email: <input type='email' name='email' value='" . $email . "' required><br>";
    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
    echo "<input type='submit' name='update' value='Update'>";
    echo "</form>";
    
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

 
    $query = "UPDATE user SET username='$username', password='$password', nama='$nama', email='$email' WHERE id='$id'";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil diupdate!";
    } else {
        echo "Data gagal diupdate: " . mysqli_error($koneksi);
    }
}
?>
</table>