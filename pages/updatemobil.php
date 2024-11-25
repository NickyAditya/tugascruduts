<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$plat_mobil   = $_POST['plat_mobil'];
$merk    = $_POST['merk'];
$nama_mobil = $_POST['nama_mobil'];
$warna   = $_POST['warna'];
$harga_sewa   = $_POST['harga_sewa'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mobil SET plat_mobil = '$plat_mobil', merk = '$merk', nama_mobil = '$nama_mobil', warna = '$warna', harga_sewa = '$harga_sewa' WHERE plat_mobil = '$plat_mobil'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: mobil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>