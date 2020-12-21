<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a target="_blank" href="https://instagram.com/ayundanvl/">Sikatup Developer</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
<!-- Summernote -->
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
        $('.toastrDefaultSuccessProduk').click(function() {
            toastr.success('Berhasil Tambah, Data penambahan terjadi di Data Produk.')
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
        $('.toastrDefaultInfoProduk').click(function() {
            toastr.info('Berhasil Update, Data perubahan terjadi di Data Produk.')
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
        $('.toastrDefaultErrorProduk').click(function() {
            toastr.error('Berhasil Hapus, Data dihapus pada bagian Data Produk')
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
        $('.toastrDefaultWarningStaffDel').click(function() {
            toastr.warning('Tidak dapat menghapus, Anda sekarang menggunakan akun tersebut')
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