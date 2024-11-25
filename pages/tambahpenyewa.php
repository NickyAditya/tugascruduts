<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_penyewa = $_POST['id_penyewa'];
    $nama = $_POST['nama'];
    $jaminan = $_POST['jaminan'];
    $alamat = $_POST['alamat'];
    $durasi_sewa = $_POST['durasi_sewa'];

    $query = "INSERT INTO penyewa (id_penyewa, nama, jaminan, alamat, durasi_sewa) VALUES ('$id_penyewa', '$nama', '$jaminan', '$alamat', '$durasi_sewa')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: penyewa.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>
