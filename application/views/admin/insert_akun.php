<div class="jumbotron text-center">
	<h2>DAFTAR AKUN ADMIN</h2>
</div>

<div class="container" style="margin-bottom: 50px">
	<div class="col-md-offset-3 col-md-6">
		<form action="" method="post">
      <?= $message; ?>
			<div class="row">
        		<div class="col-md-6">
          			<div class="form-group">
            			<label for="id_admin">Id Admin</label>
            			<input type="text" class="form-control" name="id_admin" required>
          			</div>
        		</div>
        		<div class="col-md-6">
          			<div class="form-group">
            			<label for="username">Username</label>
            			<input type="text" class="form-control" name="username" required>
          			</div>
        		</div>
        		<div class="col-md-6">
          			<div class="form-group">
            			<label for="password">Password</label>
            			<input type="password" class="form-control" name="password" required>
          			</div>
        		</div>
        		<div class="col-md-6">
          			<div class="form-group">
            			<label for="nama">Nama Lengkap</label>
            			<input type="text" class="form-control" name="nama" required>
          			</div>
        		</div>
        		<div class="form-group">
        			<input type="submit" class="btn btn-success" name="insertAkun" value="DAFTAR">
      			</div>
        	</div>
		</form>
	</div>
</div>