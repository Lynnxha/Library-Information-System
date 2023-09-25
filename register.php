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

            <!-- Signup Form -->

            <div class="form login">
                <div class="form-content">
                    <header>Signup</header>
                    <form name="formLogin" action="function/Process.php?aksi=daftar" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="field input-field">
                            <input type="text" name="funame" placeholder="Nama Lengkap" id="funame" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="text" name="uname" placeholder="Nama Pengguna" id="uname" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="passw" placeholder="Kata Sandi" id="passw" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
                        </div>
                    </form>

                    <h5 class="no-account">Already have an account?</h5>

                    <div class="field button-field text-center">
                    <button type="button" onclick="Masuk()" class="btn btn-primary btn-block btn-flat"> Login Disini</button>
                    </div>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="components/js/script.js"></script>

        <script src="assets/dist/js/sweetalert.min.js"></script>

        <script>
        function Masuk() {
            window.location.href = "masuk";
        }
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
            if (document.forms["formLogin"]["funame"].value == "") {
                toastr.error("Nama Lengkap harus diisi !!");
                document.forms["formLogin"]["funame"].focus()
                return false;
            }
            if (document.forms["formLogin"]["uname"].value == "") {
                toastr.error("Nama Pengguna harus diisi !!");
                document.forms["formLogin"]["uname"].focus();
                return false;
            }
            if (document.forms["formLogin"]["passw"].value == "") {
                toastr.error("Kata Sandi harus diisi !!");
                document.forms["formLogin"]["passw"].focus();
                return false;
            }
        }
    </script>
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