<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from produk where kode_produk='$id'");

if($hapus==true){

	header("location:tampil-produk.php?pesan=hapusBerhasil");

} else{
	echo "Error";
}

?>