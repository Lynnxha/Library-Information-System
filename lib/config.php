<?php
$config = mysqli_connect("localhost", "root", "", "perpus");

if (!$config) {
    echo "<script>alert('Koneksi Pada Database Gagal');</script>";
}
?>
