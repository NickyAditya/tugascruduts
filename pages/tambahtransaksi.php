<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_transaksi = $_POST['id_transaksi'];
    $nama_cust = $_POST['nama_cust'];
    $tgl_sewa = $_POST['tgl_sewa'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $mobil_disewa = $_POST['mobil_disewa'];
    $total_harga = $_POST['total_harga'];

    $query = "INSERT INTO transaksi (id_transaksi, nama_cust, tgl_sewa, tgl_kembali, mobil_disewa, total_harga) 
              VALUES ('$id_transaksi', '$nama_cust', '$tgl_sewa', '$tgl_kembali', '$mobil_disewa', '$total_harga')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: transaksi.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>
