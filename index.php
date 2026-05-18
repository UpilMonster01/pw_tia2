<?php
echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
<style>
  body { font-family: sans-serif; background: #f5f5f3; padding: 2rem; }
  .judul { font-size: 22px; font-weight: 500; color: #1a1a1a; margin-bottom: 1rem; }
  .list { display: flex; flex-direction: column; gap: 8px; max-width: 400px; }
  .card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 1rem 1.1rem;
          text-decoration: none; display: flex; gap: 12px; align-items: center;
          transition: border-color .15s, background .15s; color: inherit; }
  .card:hover { border-color: #aaa; background: #fafaf8; }
  .icon { width: 36px; height: 36px; border-radius: 8px; display: flex; align-items: center;
          justify-content: center; font-size: 18px; flex-shrink: 0; }
  .num { font-size: 11px; color: #999; margin: 0; }
  .title { font-size: 14px; font-weight: 500; color: #1a1a1a; margin: 2px 0 0; }
</style>
';

echo '<h1 class="judul">Daftar Materi Pemrograman Web</h1>';

echo '<div class="list">';

echo '<a class="card" href="materi1.php"><div class="icon" style="background:#E6F1FB;color:#185FA5"><i class="ti ti-variable"></i></div><div><p class="num">Materi 1</p><p class="title">Variabel dan Tipe Data</p></div></a>';
echo '<a class="card" href="materi2.php"><div class="icon" style="background:#EAF3DE;color:#3B6D11"><i class="ti ti-repeat"></i></div><div><p class="num">Materi 2</p><p class="title">Looping dan Kondisi</p></div></a>';
echo '<a class="card" href="materi3.php"><div class="icon" style="background:#EEEDFE;color:#534AB7"><i class="ti ti-function"></i></div><div><p class="num">Materi 3</p><p class="title">Function</p></div></a>';
echo '<a class="card" href="materi4.php"><div class="icon" style="background:#FAEEDA;color:#854F0B"><i class="ti ti-database"></i></div><div><p class="num">Materi 4</p><p class="title">Database</p></div></a>';
echo '<a class="card" href="materi5.php"><div class="icon" style="background:#FAECE7;color:#993C1D"><i class="ti ti-code"></i></div><div><p class="num">Materi 5</p><p class="title">Materi 5</p></div></a>';
echo '<a class="card" href="materi6.php"><div class="icon" style="background:#FBEAF0;color:#993556"><i class="ti ti-layout"></i></div><div><p class="num">Materi 6</p><p class="title">Materi 6</p></div></a>';
echo '<a class="card" href="materi7.php"><div class="icon" style="background:#E1F5EE;color:#0F6E56"><i class="ti ti-server"></i></div><div><p class="num">Materi 7</p><p class="title">Materi 7</p></div></a>';
echo '<a class="card" href="materi8.php"><div class="icon" style="background:#FCEBEB;color:#A32D2D"><i class="ti ti-shield"></i></div><div><p class="num">Materi 8</p><p class="title">Materi 8</p></div></a>';
echo '<a class="card" href="materi9.php"><div class="icon" style="background:#F1EFE8;color:#5F5E5A"><i class="ti ti-rocket"></i></div><div><p class="num">Materi 9</p><p class="title">Materi 9</p></div></a>';

echo '</div>';
?>