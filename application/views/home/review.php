<div class="jumbotron text-center">
  <h2>REVIEW</h2>
</div>

<div class="container" style="margin-bottom: 50px">
  <div class="col-md-offset-3 col-md-6">
    <form action="" method="post">
      <?= $message; ?>
      <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="id_review">Id Review</label>
                  <input type="text" class="form-control" name="id_review" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="nm_review">Nama</label>
                  <input type="textarea" class="form-control" name="nm_review" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="nama">Nama Obat</label>
                  <input type="text" class="form-control" name="nama" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="kode_obat">Kode Obat</label>
                  <input type="text" class="form-control" name="kode_obat" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" class="form-control" name="isi" required>
                </div>
            </div>
      </div>
      <div class="row">
        <div class="form-group">
          <a href="<?= site_url('home/lihat_review');?>">Lihat Review</a>
          <br><br>
          <input type="submit" class="btn btn-success" name="insertReview" value="SUBMIT">
        </div>
      </div>
    </form>
  </div>
</div>