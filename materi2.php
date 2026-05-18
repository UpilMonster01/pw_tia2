<style>
  body { font-family: sans-serif; background: #f5f5f3; padding: 2rem; color: #1a1a1a; }
  .wrap { max-width: 560px; }
  .section-title { font-size: 11px; font-weight: 500; color: #999; letter-spacing: 0.08em; text-transform: uppercase; margin: 1.5rem 0 8px; }
  .card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 1rem 1.25rem; margin-bottom: 8px; }
  .form-row { display: flex; gap: 8px; align-items: center; }
  .form-row label { font-size: 13px; color: #666; white-space: nowrap; }
  .form-row input[type=number] { flex: 1; padding: 6px 10px; border: 0.5px solid #ddd; border-radius: 8px; font-size: 14px; }
  .form-row input[type=submit] { padding: 6px 16px; border: 0.5px solid #ddd; border-radius: 8px; background: #fff; font-size: 13px; cursor: pointer; }
  .form-row input[type=submit]:hover { background: #f5f5f3; }
  .loop-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 8px; }
  .loop-card { background: #fff; border: 0.5px solid #ddd; border-radius: 12px; padding: 0.9rem 1rem; }
  .loop-label { font-size: 11px; color: #999; margin: 0 0 8px; text-transform: uppercase; letter-spacing: 0.06em; }
  .loop-items { display: flex; flex-wrap: wrap; gap: 5px; }
  .num-pill { font-size: 12px; font-weight: 500; background: #f5f5f3; border: 0.5px solid #ddd; border-radius: 6px; padding: 3px 8px; }
  .result-row { display: flex; justify-content: space-between; align-items: center; }
  .badge-genap { font-size: 12px; padding: 3px 10px; border-radius: 6px; font-weight: 500; background: #E6F1FB; color: #185FA5; }
  .badge-ganjil { font-size: 12px; padding: 3px 10px; border-radius: 6px; font-weight: 500; background: #FAEEDA; color: #854F0B; }
</style>

<div class="wrap">

  <p class="section-title">Input</p>
  <div class="card">
    <form method="post" class="form-row">
      <label>Masukan angka:</label>
      <input type="number" name="angka" min="1">
      <input type="submit" value="Kirim">
    </form>
  </div>

<?php if (isset($_POST['angka'])) : ?>
  <?php
    $data = (int)$_POST['angka'];

    // siapkan angka for
    $for_items = '';
    for ($i = 1; $i <= $data; $i++)
      $for_items .= "<span class='num-pill'>$i</span>";

    // siapkan angka while
    $while_items = '';
    $i = 1;
    while ($i <= $data) { $while_items .= "<span class='num-pill'>$i</span>"; $i++; }

    // siapkan angka do while
    $dowhile_items = '';
    $i = 1;
    do { $dowhile_items .= "<span class='num-pill'>$i</span>"; $i++; } while ($i <= $data);

    // ganjil genap
    $badge = ($data % 2 == 0)
      ? "<span class='badge-genap'>Genap</span>"
      : "<span class='badge-ganjil'>Ganjil</span>";
  ?>

  <p class="section-title">Hasil Looping</p>
  <div class="loop-grid">
    <div class="loop-card">
      <p class="loop-label">For</p>
      <div class="loop-items"><?= $for_items ?></div>
    </div>
    <div class="loop-card">
      <p class="loop-label">While</p>
      <div class="loop-items"><?= $while_items ?></div>
    </div>
    <div class="loop-card">
      <p class="loop-label">Do While</p>
      <div class="loop-items"><?= $dowhile_items ?></div>
    </div>
  </div>

  <div class="card" style="margin-top:8px">
    <div class="result-row">
      <span style="font-size:13px; color:#666;">Angka <strong><?= $data ?></strong> adalah</span>
      <?= $badge ?>
    </div>
  </div>

<?php endif; ?>

</div>