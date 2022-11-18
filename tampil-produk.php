<!doctype html>
<html>
<head>
	<title>tabel produk</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>	
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
<h1> Tabel  Produk</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){
?>

<div class="alert alert-success">
	penyimpanan berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusBerhasil"){
?>

<div class="alert alert-success">
	data berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editBerhasil"){
?>

<div class="alert alert-success">
	perubahan berhasil!
</div>

<?php

}

?>

	<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
		<thead>
		<tr>
			<td><b>KODE PRODUK</b></td><td><b>NAMA PRODUK</b></td><td><b>HARGA</b></td><td><b>TANGGAL MASUK</b></td><td><b>JUMLAH</b></td><td><b>STOK</b></td><td><b>KUALITAS</b></td>
			<th>
                <a href="input-produk.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"> </button>
                </a>
			</th>
		</tr>
		</thead>
		<tbody>
		<?php

		include"koneksi.php";
$sql=$koneksi->query("select * from produk order by kode_produk ASC");

while($row= $sql->fetch_assoc()){
	?>

	<tr>
			<td><?php echo $row['kode_produk']?></td>
			<td><?php echo $row['nama_produk']?></td>
			<td><?php echo $row['harga']?></td>
			<td><?php echo $row['tanggal_masuk']?></td>
			<td><?php echo $row['jumlah']?></td>
			<td><?php echo $row['stok']?></td>
			<td><?php echo $row['kualitas']?></td>


			<td>

             <a href="edit-produk.php?id=<?php echo $row['kode_produk']?>" onclick="return confirm('anda yakin ingin mengubah data?')">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapus-produk.php?id=<?php echo $row['kode_produk']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

			</td>
		</tr>

	<?php
	}
	?>
	</tbody>

	</table>
</div>
</div>
</div>

	<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
	<script type="text/javascript">
		<$(document).ready(function(){
			$('#dataTables').DataTable();
		});
	</script>
	
</body>
</html>
