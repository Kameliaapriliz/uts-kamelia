<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil edit</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-edit-produk.php" method="POST">
					<?php
					$id=$_GET['id'];
                       include "koneksi.php";
                       $tampil=$koneksi->query("select * from produk where kode_produk='$id'");
                       $row=$tampil->fetch_assoc();
					?>
					<div class="form-group">
						<label for="kode_produk">Kode Produk</label>
						<input type="number" name="kode_produk" value="<?php echo $row['kode_produk']?>" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="nama_produk">Nama Produk</label>
		<input type="text" name="nama_produk" value="<?php echo $row['nama_produk']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="harga">Harga</label>
	<input type="text" name="harga" value="<?php echo $row['harga']?>"class="form-control">
	</div>

	<div class="form-group">
		<label for="tanggal_masuk">Tanggal Masuk</label>
		<input type="date" name="tanggal_masuk" value="<?php echo $row['tanggal_masuk']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="jumlah">Jumlah</label>
		<input type="number" name="jumlah" value="<?php echo $row['jumlah']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="stok">Stok</label>
		<input type="number" name="stok" value="<?php echo $row['stok']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="kualitas">Kualitas</label>
		<input type="text" name="kualitas" value="<?php echo $row['kualitas']?>" class="form-control">
	</div>



<input type="submit" name="kirim" value="ubah" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>