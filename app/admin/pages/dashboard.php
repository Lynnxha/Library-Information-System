<?php
session_start();
if ($_SESSION['level'] != "Admin") {
    $_SESSION['masuk_dulu'] = "Silahkan masuk terlebih dahulu !!";
    header("location: ../../masuk");
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-family: 'Quicksand', sans-serif; font-weight: bold;">
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="alert alert-secondary" style="color: #383d41; background-color: #e2e3e5; border-color: #d6d8db;">
            Selamat Datang, <?= $_SESSION['fullname']; ?> di Page Administrator Perpustakaan.
        </div>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>-</h3>

                        <p>Anggota</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <?php
                include "../../config/koneksi.php";
                $query_buku = mysqli_query($koneksi, "SELECT * FROM buku");
                $row_buku = mysqli_num_rows($query_buku);
                ?>
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?= $row_buku; ?></h3>

                        <p>Buku</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="data-buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>-</h3>

                        <p>Peminjaman</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-out"></i>
                    </div>
                    <a href="data-peminjaman" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>-</h3>

                        <p>Pengembalian</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                    <a href="data-pengembalian" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>