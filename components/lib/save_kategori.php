<?php
include "../config.php";

$kode_kategori = $_POST['kode_kategori'];
$nama_kategori = $_POST['nama_kategori'];
$query = mysqli_query($config, "INSERT INTO kategori VALUES (null,'$kode_kategori','$nama_kategori')");

if ($query) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Simpan Sukses',
            }).then(function() {
                document.location='../kategori.php';
            });
        });
    </script>";
}
?>
