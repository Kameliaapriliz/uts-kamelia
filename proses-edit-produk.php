<?php

include "koneksi.php";

$kode_produk=$_POST['kode_produk'];
$nama_produk=$_POST['nama_produk'];
$harga=$_POST['harga'];
$tanggal_masuk=$_POST['tanggal_masuk'];
$jumlah=$_POST['jumlah'];
$stok=$_POST['stok'];
$kualitas=$_POST['kualitas'];



$ubah=$koneksi->query("update produk set kode_produk='$kode_produk', nama_produk='$nama_produk', harga='$harga', tanggal_masuk='$tanggal_masuk', jumlah='$jumlah', stok='$stok', kualitas='$kualitas' where kode_produk='$id'");

if($ubah==true){

	header("location:tampil-produk.php?pesan=editBerhasil");
} else{

	echo "error";
}

?>