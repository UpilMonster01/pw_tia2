<?php include "koneksi.php"; ?>

<style>
  body { font-family: sans-serif; background: #f5f5f3; padding: 2rem; color: #1a1a1a; }
  .wrap { max-width: 700px; }
  .section-title { font-size: 11px; font-weight: 500; color: #999; letter-spacing: 0.08em; text-transform: uppercase; margin: 1.5rem 0 8px; }
  .card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 1rem 1.25rem; margin-bottom: 8px; }
  .field-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 10px; }
  .field label { font-size: 12px; color: #999; display: block; margin-bottom: 3px; }
  .field input { width: 100%; padding: 7px 10px; border: 0.5px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box; }
  .btn-submit { width: 100%; padding: 8px; border: 0.5px solid #ddd; border-radius: 8px; background: #fff; font-size: 13px; cursor: pointer; }
  .btn-submit:hover { background: #f5f5f3; }
  .alert { padding: 8px 12px; border-radius: 8px; font-size: 13px; margin-top: 10px; }
  .alert-ok  { background: #EAF3DE; color: #3B6D11; border: 0.5px solid #C0DD97; }
  .alert-err { background: #FCEBEB; color: #A32D2D; border: 0.5px solid #F7C1C1; }
  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  th { text-align: left; padding: 8px 10px; font-size: 11px; font-weight: 500; color: #999; text-transform: uppercase; border-bottom: 0.5px solid #ddd; }
  td { padding: 9px 10px; border-bottom: 0.5px solid #eee; vertical-align: middle; }
  tr:last-child td { border-bottom: none; }
  .btn-edit  { font-size: 12px; padding: 3px 10px; border-radius: 6px; background: #E6F1FB; color: #185FA5; border: none; cursor: pointer; margin-right: 4px; text-decoration: none; }
  .btn-hapus { font-size: 12px; padding: 3px 10px; border-radius: 6px; background: #FCEBEB; color: #A32D2D; border: none; cursor: pointer; text-decoration: none; }
</style>

<?php
// Proses semua aksi di atas HTML
$pesan = "";
$tipe_pesan = "";

// Hapus
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $del = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($koneksi, $del)) { $pesan = "Data berhasil dihapus!"; $tipe_pesan = "ok"; }
    else { $pesan = "Gagal hapus: " . mysqli_error($koneksi); $tipe_pesan = "err"; }
}

// Insert
if (isset($_POST['kirim'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $q = "INSERT INTO user (username, password, nama, email) VALUES ('$username','$password','$nama','$email')";
    if (mysqli_query($koneksi, $q)) { $pesan = "Data berhasil ditambahkan!"; $tipe_pesan = "ok"; }
    else { $pesan = "Gagal tambah: " . mysqli_error($koneksi); $tipe_pesan = "err"; }
}

// Update
if (isset($_POST['update'])) {
    $id       = (int)$_POST['id'];
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $nama     = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $q = "UPDATE user SET username='$username', password='$password', nama='$nama', email='$email' WHERE id=$id";
    if (mysqli_query($koneksi, $q)) { $pesan = "Data berhasil diupdate!"; $tipe_pesan = "ok"; }
    else { $pesan = "Gagal update: " . mysqli_error($koneksi); $tipe_pesan = "err"; }
}

// Ambil data edit
$edit_row = null;
if (isset($_GET['edit'])) {
    $id = (int)$_GET['edit'];
    $res = mysqli_query($koneksi, "SELECT * FROM user WHERE id=$id");
    $edit_row = mysqli_fetch_assoc($res);
}
?>

<div class="wrap">

  <?php if ($pesan) : ?>
    <div class="alert alert-<?= $tipe_pesan ?>" style="margin-bottom:12px;"><?= $pesan ?></div>
  <?php endif; ?>

  <!-- Form Tambah / Edit -->
  <p class="section-title"><?= $edit_row ? 'Edit User' : 'Tambah User' ?></p>
  <div class="card">
    <form method="POST" action="">
      <?php if ($edit_row) : ?>
        <input type="hidden" name="id" value="<?= $edit_row['id'] ?>">
      <?php endif; ?>
      <div class="field-grid">
        <div class="field">
          <label>Username</label>
          <input type="text" name="username" placeholder="username" value="<?= $edit_row['username'] ?? '' ?>" required>
        </div>
        <div class="field">
          <label>Password</label>
          <input type="password" name="password" placeholder="password" value="<?= $edit_row['password'] ?? '' ?>" required>
        </div>
        <div class="field">
          <label>Nama</label>
          <input type="text" name="nama" placeholder="nama lengkap" value="<?= $edit_row['nama'] ?? '' ?>" required>
        </div>
        <div class="field">
          <label>Email</label>
          <input type="email" name="email" placeholder="email@domain.com" value="<?= $edit_row['email'] ?? '' ?>" required>
        </div>
      </div>
      <?php if ($edit_row) : ?>
        <button class="btn-submit" type="submit" name="update">Simpan Perubahan</button>
        <a href="materi4.php" style="display:block; text-align:center; margin-top:8px; font-size:13px; color:#999;">Batal</a>
      <?php else : ?>
        <button class="btn-submit" type="submit" name="kirim">+ Tambah User</button>
      <?php endif; ?>
    </form>
  </div>

  <!-- Tabel Data -->
  <p class="section-title">Data User</p>
  <div class="card" style="padding:0; overflow:hidden;">
    <table>
      <thead>
        <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM user");
        if (mysqli_num_rows($result) == 0) :
        ?>
          <tr><td colspan="5" style="text-align:center; color:#999; padding:1.5rem;">Belum ada data</td></tr>
        <?php else : while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= htmlspecialchars($row['username']) ?></td>
            <td>
                <span class="pass-text" style="filter:blur(4px); cursor:pointer; font-size:13px; transition:filter 0.2s;"
                  onclick="this.style.filter = this.style.filter ? '' : 'blur(4px)'">
                 <?= htmlspecialchars($row['password']) ?>
                </span>
            </td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
              <a class="btn-edit"  href="materi4.php?edit=<?= $row['id'] ?>">Edit</a>
              <a class="btn-hapus" href="materi4.php?id=<?= $row['id'] ?>"
                 onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; endif; ?>
      </tbody>
    </table>
  </div>

</div>