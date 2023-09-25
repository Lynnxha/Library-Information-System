<?php
session_start();
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            include "config/koneksi.php";

            $sql = mysqli_query($koneksi, "SELECT * FROM identitas");
            $row1 = mysqli_fetch_assoc($sql);
        ?>

        <title> Login <?= $row1['nama_app']; ?> Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="components/css/style.css">

        <!-- Favicon -->
        <link rel="icon" type="icon" href="assets/dist/img/logo_app.png">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login Sistem</header>
                    <form name="formLogin" action="function/Process.php?aksi=masuk" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="field input-field">
                            <input type="text" name="username" id="username" placeholder="Nama Pengguna" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" name="password" id="password" placeholder="Kata Sandi" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                        </div>
                    </form>

                    <h5 class="no-account">Don't have an account?</h5>

                    <div class="field button-field text-center">
                            <button type="button" onclick="Register()" class="btn btn-primary btn-block btn-flat"> Daftar sebagai member</button>
                    </div>
                </div>

            </div>

            <!-- Signup Form -->

            <!-- <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="#">
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Create password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Confirm password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button>Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

            </div>
        </section> -->

        <!-- JavaScript -->
        <script src="components/js/script.js"></script>

        <script src="assets/dist/js/sweetalert.min.js"></script>

        <script>
            function Register() {
                window.location.href = "pendaftaran";
            }
        </script>

        <script>
            function ForgotPassword() {
                window.location.href = "lupa-password";
            }
        </script>

        <script>
            <?php
            if (isset($_SESSION['masuk_dulu']) && $_SESSION['masuk_dulu'] <> '') {
                echo "swal({
                    icon: 'error',
                    title: 'Peringatan',
                    text: '$_SESSION[masuk_dulu]',
                    buttons: false,
                    timer: 3000
                    })";
            }
            $_SESSION['masuk_dulu'] = '';
            ?>
        </script>

        <script>
            <?php
                if (isset($_SESSION['berhasil']) && $_SESSION['berhasil'] <> '') {
                    echo "swal({
                        icon: 'success',
                        title: 'Berhasil',
                        text: '$_SESSION[berhasil]',
                        buttons: false,
                        timer: 3000
                        })";
                }
                $_SESSION['berhasil'] = '';
            ?>
        </script>

        <script>
            <?php
                if (isset($_SESSION['gagal']) && $_SESSION['gagal'] <> '') {
                    echo "swal({
                        icon: 'error',
                        title: 'Peringatan',
                        text: '$_SESSION[gagal]',
                        buttons: false,
                        timer: 3000
                        })";
                }
                $_SESSION['gagal'] = '';
            ?>
        </script>

        <script>
                <?php
                if (isset($_SESSION['gagal_login']) && $_SESSION['gagal_login'] <> '') {
                    echo "swal({
                        icon: 'error',
                        title: 'Peringatan',
                        text: '$_SESSION[gagal_login]',
                        buttons: false,
                        timer: 3000
                    })";
                }
                $_SESSION['gagal_login'] = '';
                ?>
            </script>
            <script>
                <?php
                if (isset($_SESSION['berhasil_keluar']) && $_SESSION['berhasil_keluar'] <> '') {
                    echo "swal({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '$_SESSION[berhasil_keluar]',
                    buttons: false,
                    timer: 3000
                })";
                }
                $_SESSION['berhasil_keluar'] = '';
                ?>
            </script>
            <!-- Toastr -->
            <script src="assets/dist/js/toastr.min.js"></script>
            <!-- -->
            <script>
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            </script>
            <!-- -->
            <script>
                function validateForm() {
                    if (document.forms["formLogin"]["username"].value == "") {
                        toastr.error("Nama Pengguna harus diisi !!");
                        document.forms["formLogin"]["username"].focus();
                        return false;
                    }
                    if (document.forms["formLogin"]["password"].value == "") {
                        toastr.error("Kata Sandi harus diisi !!");
                        document.forms["formLogin"]["password"].focus();
                        return false;
                    }
                }
            </script>

    </body>
</html>