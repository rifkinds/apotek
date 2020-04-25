<div class="jumbotron text-center">
  <h2>DATA AKUN</h2>
</div>

<div class="container" style="margin-bottom: 50px;">
  <?= $message; ?>
  <table class="table">
    <tr>
      <th>Id Admin</th>
      <th>Username</th>
      <th>Password</th>
      <th>Nama</th>
      <th>Action</th>
    </tr>
    <?php foreach($admin as $akun): ?>
    <tr>
      <td><?= $akun->id_admin; ?></td>
      <td><?= $akun->username; ?></td>
      <td><?= $akun->password; ?></td>
      <td><?= $akun->nama; ?></td>
      <td>
        <a href="<?= site_url('admin/editAkun/'.$akun->id_admin);?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> | 
        <a href="<?= site_url('admin/hapusAkun/'.$akun->id_admin);?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>
