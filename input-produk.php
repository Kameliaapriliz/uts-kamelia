<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil input</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-input-produk.php" method="POST">
					<div class="form-group">
						<label for="kode_produk">Kode Produk</label>
						<input type="number" name="kode_produk" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="nama_produk">Nama Produk</label>
		<input type="text" name="nama_produk" class="form-control">
	</div>

	<div class="form-group">
		<label for="harga">Harga </label>
	<input type="text" name="harga" class="form-control">
	</div>

		<div class="form-group">
		<label for="tanggal_masuk">Tanggal Masuk</label>
	<input type="date" name="tanggal_masuk" class="form-control">
	</div>

		<div class="form-group">
		<label for="jumlah">Jumlah</label>
	<input type="number" name="jumlah" class="form-control">
	</div>

		<div class="form-group">
		<label for="stok">Stok</label>
	<input type="number" name="stok" class="form-control">
	</div>

		<div class="form-group">
		<label for="kualitas">Kualitas</label>
	<input type="text" name="kualitas" class="form-control">
	</div>

	

<input type="submit" name="kirim" value="simpan" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>