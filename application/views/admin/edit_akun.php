<div class="jumbotron text-center">
  <h2>EDIT AKUN</h2>
</div>

<div class="container" style="margin-bottom: 50px">
  <div class="col-md-offset-3 col-md-6">
    <form action="<?= site_url('admin/editAkun/'.$admin->id_admin);?>" method="post">
      <?= $message; ?>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="id_admin">Id Admin</label>
            <input type="text" class="form-control" name="id_admin" value="<?= $admin->id_admin; ?>" readonly>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" value="<?= $admin->username; ?>" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" value="<?= $admin->password; ?>" required>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" value="<?= $admin->nama; ?>" required>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-success" name="editAkun" value="EDIT">
        <input type="button" class="btn btn-success" name="back" value="BACK" onclick="window.location.href='http://localhost/apotek/admin/daftar_akun'">
      </div>
    </form>
  </div>
</div>
