<div class="jumbotron text-center">
  <br>
  <p><img src=" <?php echo base_url('assets/img/') .$obat->gambar; ?>" width = "250"></p>
  <h2><?= $obat->nama ?></h2><small> (<?= $obat->kode_obat;?>)</small>
</div>

<div class="container">
  <h3>Manfaat</h3>
  <p><?= $obat->manfaat;?></p>
  <ul>
    <li>Bentuk obat : <?= $obat->bentuk;?></li>
    <li>Dikonsumsi oleh : <?= $obat->konsumen;?></li>
    <li>Harga satuan : <?= $obat->harga;?></li>
  </ul>

  <br>
  <a href="javascript:history.go(-1)" class="btn btn-warning">Kembali</a>
</div>
