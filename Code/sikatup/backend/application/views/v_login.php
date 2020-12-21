<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SITE_NAME ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url() ?>assets/dist/img/wisata.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" width="40%">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login</p>
                <?php echo $this->session->flashdata('message'); ?>
                <form action="<?php echo base_url('login'); ?>" method="post">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('username', '<small class="text-danger pl-3 ">', '</small>'); ?>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3 ">', '</small>'); ?>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>


        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- daterangepicker -->
        <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <!-- <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <!-- DataTables -->
        <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <!-- Ekko Lightbox -->
        <script src="<?php echo base_url() ?>assets/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
        <!-- Filterizr-->
        <script src="<?php echo base_url() ?>assets/plugins/filterizr/jquery.filterizr.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                bsCustomFileInput.init();
            });
        </script>
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script>
            $(function() {
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox({
                        alwaysShowClose: true
                    });
                });

                $('.filter-container').filterizr({
                    gutterPixels: 3
                });
                $('.btn[data-filter]').on('click', function() {
                    $('.btn[data-filter]').removeClass('active');
                    $(this).addClass('active');
                });
            })
        </script>
        <script type="text/javascript">
            $(function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                $('.toastrDefaultSuccessTiket').click(function() {
                    toastr.success('Berhasil Tambah, Data penambahan terjadi di Data Tiket.')
                });
                $('.toastrDefaultSuccessKateg').click(function() {
                    toastr.success('Berhasil Tambah, Data penambahan terjadi di Data Kategori Tiket.')
                });
                $('.toastrDefaultSuccessArtikel').click(function() {
                    toastr.success('Berhasil Tambah, Data penambahan terjadi di Data Artikel.')
                });
                $('.toastrDefaultSuccessStaff').click(function() {
                    toastr.success('Berhasil Tambah, Data penambahan terjadi di Data Staff.')
                });
                $('.toastrDefaultSuccessReg').click(function() {
                    toastr.success('Berhasil Registrasi, Silahkan login')
                });
                $('.toastrDefaultSuccessLogout').click(function() {
                    toastr.success('Berhasil Logout, Terima kasih telah menggunakan layanan kami.')
                });
                $('.toastrDefaultInfoTiket').click(function() {
                    toastr.info('Berhasil Update, Data perubahan terjadi di Data Tiket.')
                });
                $('.toastrDefaultInfoKateg').click(function() {
                    toastr.info('Berhasil Update, Data perubahan terjadi di Data Kategori Tiket.')
                });
                $('.toastrDefaultInfoArtikel').click(function() {
                    toastr.info('Berhasil Update, Data perubahan terjadi di Data Artikel.')
                });
                $('.toastrDefaultInfoCust').click(function() {
                    toastr.info('Berhasil Update, Data perubahan terjadi di Data Customer.')
                });
                $('.toastrDefaultInfoStaff').click(function() {
                    toastr.info('Berhasil Update, Data perubahan terjadi di Data Staff.')
                });
                $('.toastrDefaultErrorTiket').click(function() {
                    toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Tiket')
                });
                $('.toastrDefaultErrorKateg').click(function() {
                    toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Kategori Tiket')
                });
                $('.toastrDefaultErrorTrans').click(function() {
                    toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Transaksi')
                });
                $('.toastrDefaultErrorArtikel').click(function() {
                    toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Artikel')
                });
                $('.toastrDefaultErrorCust').click(function() {
                    toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Customer')
                });
                $('.toastrDefaultErrorStaff').click(function() {
                    toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Staff')
                });
                $('.toastrDefaultErrorSalah').click(function() {
                    toastr.error('Username dan Password tidak cocok, silahkan login ulang')
                });
                $('.toastrDefaultErrorBanned').click(function() {
                    toastr.error('Akun di banned oleh admin, silahkan hubungi admin')
                });
                $('.toastrDefaultWarning').click(function() {
                    toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
                });

                $('.toastsDefaultDefault').click(function() {
                    $(document).Toasts('create', {
                        title: 'Toast Title',
                        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    })
                });
            });
        </script>
        <script>
            window.onload = function() {
                document.getElementById("klikAuto").click();
                document.getElementById("removeBtn").style.display = "none";
            }
        </script>
</body>

</html>