<?=$this->extend('tmplt/admin/template')?>

<?=$this->section('content')?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container mt-5">
<?php if (session()->has('error')): ?>
    <div class="alert alert-danger">
        <?php foreach (session()->get('error') as $error): ?>
            <p><?= esc($error) ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php if (session()->has('success')): ?>
    <div class="alert alert-success"><?= session()->get('success') ?></div>
<?php endif ?>


	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-dark text-white">
					<h3 class="card-title mb-0">Profile</h3>
				</div>
				<div class="card-body">
			
				<img  class="img-fluid rounded-circle mb-3" src="<?= base_url() . "/uploads/admin/".'/'. $user['foto'] ?>">
				

					<h5 class="card-title text-dark"><?php echo $user['nama']; ?></h5>
					<p class="card-text text-dark"><?php echo $user['username']; ?></p>
					<!-- Form upload foto -->
<form action="<?= base_url('admin/profile/upload'); ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="text-dark">Foto Profile</label>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="foto" >
        <label class="custom-file-label text-dark" for="customFile">Pilih foto...</label>
    </div>
</div>
    <button type="submit" class="btn btn-dark">Upload Foto</button>
</form>


				
				</div>
			</div>
		</div>
	
		
		
		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-dark text-white">
					<h3 class="card-title mb-0">Edit Profile</h3>
				</div>
				<div class="card-body">
					<form action="profile" method="post" enctype="multipart/form-data">
						<div class="form-group text-dark">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" value="<?php echo $user['nama']; ?>">
						</div>
						<div class="form-group text-dark">
							<label>Username</label>
							<input type="text" class="form-control" name="username" value="<?php echo $user['username']; ?>">
						</div>
						<div class="form-group text-dark">
							<label>Password</label>
							<input type="password" class="form-control" name="password" value="<?php echo $user['password']; ?>">
						</div>
						<div class="form-group text-dark">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat" value="<?php echo $user['alamat']; ?>">
						</div>
					
						<button type="submit" class="btn btn-dark">Update Profile</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>






<?=$this->endSection()?>

</body>
</html>
