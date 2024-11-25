<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_penyewa   = $_POST['id_penyewa'];
$nama    = $_POST['nama'];
$jaminan = $_POST['jaminan'];
$alamat   = $_POST['alamat'];
$durasi_sewa   = $_POST['durasi_sewa'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE penyewa SET id_penyewa = '$id_penyewa', nama = '$nama', jaminan = '$jaminan', alamat = '$alamat', durasi_sewa = '$durasi_sewa' WHERE id_penyewa = '$id_penyewa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: penyewa.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>