<?php
function hello() {
    return "Selamat datang";
}

function tambah($a, $b) { return $a + $b; }
function kali($a, $b)   { return $a * $b; }
function kurang($a, $b) { return $a - $b; }
function bagi($a, $b) {
    if ($b == 0) return "Tidak bisa dibagi 0";
    return $a / $b;
}

function login($username, $password) {
    if ($username == "admin" && $password == "1234")
        return ["ok", "Login Berhasil - Selamat datang, $username"];
    return ["err", "Login Gagal - Username atau Password salah"];
}

$hasil_kalkulator = null;
$hasil_login      = null;
$ekspresi         = "";

if (isset($_POST['angka1'], $_POST['angka2'])) {
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    if (isset($_POST['tambah']))      { $hasil_kalkulator = tambah($a,$b); $ekspresi = "$a + $b"; }
    elseif (isset($_POST['kali']))    { $hasil_kalkulator = kali($a,$b);   $ekspresi = "$a × $b"; }
    elseif (isset($_POST['kurang']))  { $hasil_kalkulator = kurang($a,$b); $ekspresi = "$a − $b"; }
    elseif (isset($_POST['bagi']))    { $hasil_kalkulator = bagi($a,$b);   $ekspresi = "$a ÷ $b"; }
}

if (isset($_POST['login'])) {
    $hasil_login = login($_POST['username'], $_POST['password']);
}
?>

<style>
  body { font-family: sans-serif; background: #f5f5f3; padding: 2rem; color: #1a1a1a; }
  .wrap { max-width: 560px; }
  .section-title { font-size: 11px; font-weight: 500; color: #999; letter-spacing: 0.08em; text-transform: uppercase; margin: 1.5rem 0 8px; }
  .card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 1rem 1.25rem; margin-bottom: 8px; }
  .input-row { display: flex; gap: 8px; margin-bottom: 10px; }
  .input-row input { flex: 1; padding: 7px 10px; border: 0.5px solid #ddd; border-radius: 8px; font-size: 14px; }
  .btn-row { display: flex; gap: 6px; flex-wrap: wrap; }
  .btn-op { padding: 6px 14px; border: 0.5px solid #ddd; border-radius: 8px; background: #fff; font-size: 13px; cursor: pointer; }
  .btn-op:hover { background: #f5f5f3; }
  .result-box { margin-top: 10px; padding-top: 10px; border-top: 0.5px solid #ddd; display: flex; justify-content: space-between; align-items: center; }
  .result-value { font-size: 20px; font-weight: 500; }
  .result-err { color: #A32D2D; font-size: 13px; }
  .field { margin-bottom: 10px; }
  .field label { font-size: 12px; color: #999; display: block; margin-bottom: 4px; }
  .field input { width: 100%; padding: 7px 10px; border: 0.5px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box; }
  .btn-login { width: 100%; padding: 8px; border: 0.5px solid #ddd; border-radius: 8px; background: #fff; font-size: 14px; cursor: pointer; }
  .btn-login:hover { background: #f5f5f3; }
  .alert { margin-top: 10px; padding: 10px 14px; border-radius: 8px; font-size: 13px; }
  .alert-ok  { background: #EAF3DE; color: #3B6D11; border: 0.5px solid #C0DD97; }
  .alert-err { background: #FCEBEB; color: #A32D2D; border: 0.5px solid #F7C1C1; }
  .welcome { font-size: 14px; color: #666; }
</style>

<div class="wrap">

  <p class="section-title">Fungsi Hello</p>
  <div class="card">
    <p class="welcome">👋 <?= hello() ?></p>
  </div>

  <p class="section-title">Kalkulator (Function)</p>
  <div class="card">
    <form method="POST">
      <div class="input-row">
        <input type="number" name="angka1" placeholder="Angka 1" value="<?= $_POST['angka1'] ?? '' ?>" required>
        <input type="number" name="angka2" placeholder="Angka 2" value="<?= $_POST['angka2'] ?? '' ?>" required>
      </div>
      <div class="btn-row">
        <button class="btn-op" type="submit" name="tambah">+ Tambah</button>
        <button class="btn-op" type="submit" name="kali">× Kali</button>
        <button class="btn-op" type="submit" name="kurang">− Kurang</button>
        <button class="btn-op" type="submit" name="bagi">÷ Bagi</button>
      </div>
      <?php if ($hasil_kalkulator !== null) : ?>
      <div class="result-box">
        <span style="font-size:13px; color:#666;"><?= $ekspresi ?> =</span>
        <?php if (is_numeric($hasil_kalkulator)) : ?>
          <span class="result-value"><?= $hasil_kalkulator ?></span>
        <?php else : ?>
          <span class="result-err"><?= $hasil_kalkulator ?></span>
        <?php endif; ?>
      </div>
      <?php endif; ?>
    </form>
  </div>

  <p class="section-title">Login (Function)</p>
  <div class="card">
    <form method="POST">
      <div class="field">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="field">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <button class="btn-login" type="submit" name="login">Login</button>
      <?php if ($hasil_login !== null) : ?>
        <div class="alert alert-<?= $hasil_login[0] === 'ok' ? 'ok' : 'err' ?>">
          <?= $hasil_login[1] ?>
        </div>
      <?php endif; ?>
    </form>
  </div>

</div>