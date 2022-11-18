<?php

$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$tanggal_masuk=$_POST['tanggal_masuk'];
$jumlah=$_POST['jumlah'];
$stok=$_POST['stok'];
$kualitas=$_POST['kualitas'];



include "koneksi.php";

$simpan=$koneksi->query("insert into produk(kode_produk,nama_produk,harga,tanggal_masuk,jumlah,stok,kualitas) 
	                     values ('$kode_produk', '$nama_produk', '$harga', '$tanggal_masuk', '$jumlah', 
	                     '$stok', '$kualitas')");

if($simpan==true){

	header("location:tampil-produk.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>