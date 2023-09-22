<header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo" style="font-family: 'Quicksand', sans-serif">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><i class="fa fa-book"></i></span>
        <!-- logo for regular state and mobile devices -->
        <?php
        include "../../config/koneksi.php";

        $sql = mysqli_query($koneksi, "SELECT * FROM identitas");
        $row = mysqli_fetch_assoc($sql);
        ?>
        <span class="logo-lg"><b>PERPUSTAKAAN</b> <i class="fa fa-book"></i></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="../../assets/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- Notifications: style can be found in dropdown.less -->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../assets/dist/img/avatar01.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $_SESSION['fullname']; ?>
                            <?php include "../../config/koneksi.php";
                            $id = $_SESSION['id_user'];
                            $query_verif = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
                            $row = mysqli_fetch_array($query_verif);

                            if ($row['verif'] == "Iya") {
                                echo "<i class='fa fa-check-circle' title='Akun Terverifikasi' data-toggle='tooltip' data-placement='bottom'></i>";
                            } else {
                                //
                            }
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../../assets/dist/img/avatar01.png" class="img-circle" alt="User Image">

                            <p>
                                <!-- -->
                                <?= $_SESSION['fullname']; ?>

                                <?php include "../../config/koneksi.php";
                                $id = $_SESSION['id_user'];
                                $query_verif = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
                                $row = mysqli_fetch_array($query_verif);

                                if ($row['verif'] == "Iya") {
                                    echo "<i class='fa fa-check-circle' title='Akun Terverifikasi' data-toggle='tooltip' data-placement='bottom'></i>";
                                } else {
                                    //
                                }
                                ?>
                                <?php
                                include "../../config/koneksi.php";

                                $id = $_SESSION['id_user'];
                                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <!-- <small>Tanggal Bergabung : <?= $row['join_date']; ?></small>
                                    <small>Terakhir Login : <?= $row['terakhir_login']; ?></small> -->
                                <?php
                                }
                                ?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#Logout" data-toggle="modal" data-target="#modalLogoutConfirm" class="btn btn-default btn-flat">Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- Pesan -->
<script>
    var refreshId = setInterval(function() {
        $('#badgePesan').load('./pages/function/Pesan.php?aksi=badgePesan');
    }, 500);
</script>
<script>
    var refreshId = setInterval(function() {
        $('#Pesan').load('./pages/function/Pesan.php?aksi=Pesan');
    }, 500);
</script>
<!-- Notif -->
<script>
    var refreshId = setInterval(function() {
        $('#badgeNotif').load('./pages/function/Pemberitahuan.php?aksi=badgeNotif');
    }, 500);
</script>
<script>
    var refreshId = setInterval(function() {
        $('#headerNotif').load('./pages/function/Pemberitahuan.php?aksi=headerNotif');
    }, 500);
</script>
<script>
    var refreshId = setInterval(function() {
        $('#isiNotif').load('./pages/function/Pemberitahuan.php?aksi=isiNotif');
    }, 500);
</script>