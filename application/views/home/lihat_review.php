<div class="jumbotron text-center">
  <h2>LIHAT REVIEW</h2>
</div>

<div class="container" style="margin-bottom: 50px;">
  <?= $message; ?>
  <table class="table">
    <tr>
      <th>Id Review</th>
      <th>Nama</th>
      <th>Nama Obat</th>
      <th>Kode Obat</th>
      <th>Isi</th>
    </tr>
    <?php foreach($review as $rev): ?>
    <tr>
      <td><?= $rev->id_review; ?></td>
      <td><?= $rev->nm_review; ?></td>
      <td><?= $rev->nama; ?></td>
      <td><?= $rev->kode_obat; ?></td>
      <td><?= $rev->isi; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
