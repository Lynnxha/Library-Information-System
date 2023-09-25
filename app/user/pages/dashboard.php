<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-family: 'Quicksand', sans-serif; font-weight: bold;">
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="../../assets/#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i");

        // atur salam dengan IF
        if ($jam > '05:30' && $jam < '10:00') {
            $salam = 'Pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = 'Siang';
        } elseif ($jam < '18:00') {
            $salam = 'Sore';
        } else {
            $salam = 'Malam';
        }
        ?>
        <?php
        include "../../config/koneksi.php";

        $sql = mysqli_query($koneksi, "SELECT * FROM identitas");
        $row1 = mysqli_fetch_assoc($sql);
        ?>
        <div class="alert alert-success" style="color: #383d41; background-color: #e2e3e5; border-color: #d6d8db;">
            Selamat <?= $salam; ?>, Selamat datang <b><?= $_SESSION['fullname']; ?></b> di <?= $row1['nama_app']; ?>.
        </div>
        <!-- -->
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($koneksi, "SELECT * FROM identitas");
        $row = mysqli_fetch_assoc($query);

        ?>

        <lottie-player src="../../assets/json/3151-books.json" background="transparent" speed="1" style="width: 125px; height: 125px; display: block; margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 15px;" loop autoplay></lottie-player>

        <h1 class="text-center"><?= $row['nama_app']; ?></h1>
        <p class="text-center">Alamat : <?= $row['alamat_app']; ?></p>
    </section>
    <!-- /.content -->
</div>