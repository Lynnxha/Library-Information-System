<header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo" style="font-family: 'Quicksand', sans-serif">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Perpustakaan</span>
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
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../assets/dist/img/avatar02.png" class="user-image" alt="User Image">

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
                            <img src="../../assets/dist/img/avatar02.png" class="img-circle" alt="User Image">

                            <p>
                                <?= $_SESSION['fullname']; ?>
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