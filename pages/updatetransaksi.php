<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_transaksi   = $_POST['id_transaksi'];
$nama_cust    = $_POST['nama_cust'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_kembali   = $_POST['tgl_kembali'];
$mobil_disewa   = $_POST['mobil_disewa'];
$total_harga   = $_POST['total_harga'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaksi SET id_transaksi = '$id_transaksi', nama_cust = '$nama_cust', tgl_sewa = '$tgl_sewa', tgl_kembali = '$tgl_kembali', mobil_disewa = '$mobil_disewa', total_harga = '$total_harga' WHERE id_transaksi = '$id_transaksi'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: transaksi.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>