<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_user   = $_POST['id_user'];
$nama    = $_POST['nama'];
$username = $_POST['username'];
$password   = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET id_user = '$id_user', nama = '$nama', username = '$username', password = '$password' WHERE id_user = '$id_user'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: user.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>