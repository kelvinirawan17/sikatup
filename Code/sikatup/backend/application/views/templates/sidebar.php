<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard'); ?>" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">KarTar Putrosobo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Nama: <?= $pengurus['nama_pengurus']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('produk'); ?>" class="nav-link">
                        <i class="fas fa-shopping-bag nav-icon"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('artikel'); ?>" class="nav-link">
                        <i class="fas fa-newspaper nav-icon"></i>
                        <p>Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('pengurus'); ?>" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Pengurus</p>
                    </a>
                </li>
                <!-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('tiket'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('tiket/kategori'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konten</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item has-treeview ">
                    <a href="<?php echo base_url('login/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt left "></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>