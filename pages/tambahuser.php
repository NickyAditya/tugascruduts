<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user= $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user (id_user, nama, username, password ) 
              VALUES ('$id_user', '$nama', '$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: user.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>
