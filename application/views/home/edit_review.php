<div class="jumbotron text-center">
  <h2>EDIT REVIEW</h2>
</div>

<div class="container" style="margin-bottom: 50px">
  <div class="col-md-offset-3 col-md-6">
    <form action="<?= site_url('home/editReview/'.$review->id_review);?>" method="post">
      <?= $message; ?>
      <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="id_review">Id Review</label>
                  <input type="text" class="form-control" name="id_review" value="<?= $review->id_review; ?>" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="nm_review">Nama</label>
                  <input type="textarea" class="form-control" name="nm_review" value="<?= $review->nm_review; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="nama">Nama Obat</label>
                  <input type="text" class="form-control" name="nama" value="<?= $review->nama; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="kode_obat">Kode Obat</label>
                  <input type="text" class="form-control" name="kode_obat" value="<?= $review->kode_obat; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" class="form-control" name="isi" value="<?= $review->isi; ?>" required>
                </div>
            </div>
      </div>
      <div class="row">
        <div class="form-group">
          <input type="submit" class="btn btn-success" name="editReview" value="EDIT">
          <input type="button" class="btn btn-success" name="back" value="BACK" onclick="window.location.href='http://localhost/apotek/index.php/home/lihat_review'">
      </div>
    </form>
  </div>
</div>