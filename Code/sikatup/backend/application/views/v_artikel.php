<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Artikel</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Artikel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header TAMBAH DATA -->
    <section class="content">


        <?php echo $this->session->flashdata('message'); ?>
        <nav class="navbar navbar-default">
            <a class="btn btn-primary" href="<?= base_url() . 'artikel/tambah' ?>"><i class="fa fa-plus"></i>Tambah Data Artikel</a>
        </nav>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Artikel</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>THUBMNAIL</th>
                            <th>JUDUL</th>
                            <th>KONTEN</th>
                            <th>SLUG</th>
                            <th>KATEGORI</th>
                            <th>STATUS</th>
                            <th>PUBLISH</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        <?php foreach ($artikel as $ar) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><a href="<?= base_url() . $new = str_replace(' ', '%20', $ar->thumbnail); ?>" target="_blank"><img style="display: block; width: 100px; height: 100px;" src="<?= base_url() . $ar->thumbnail ?>" alt="post"></a></td>
                                <td><?= $ar->judul_kegiatan; ?></td>
                                <td><?= substr(strip_tags($ar->konten), 0, 30) . '...'; ?></td>
                                <td><?= $ar->slug; ?></td>
                                <td><?php if ($ar->kategori == 1) {
                                        echo '<span class="badge bg-primary">Pengumuman</span>';
                                    } else {
                                        echo '<span class="badge bg-secondary">Kegiatan</span>';
                                    } ?> </td>
                                <td><?php if ($ar->kegiatan_status == 1) {
                                        echo '<span class="badge bg-success">Tersedia</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Tidak Tersedia</span>';
                                    } ?> </td>
                                <td><?= $ar->nama_pengurus; ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?= base_url() . 'artikel/hapus/' . $ar->idKegiatan ?>" class="btn btn-danger" onclick="javascript: return confirm('YAKIN HAPUS ARTIKEL !? ')"><i class="fa fa-trash"></i></a>
                                        <a href="<?= base_url() . 'artikel/edit/' . $ar->idKegiatan ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>THUBMNAIL</th>
                            <th>JUDUL</th>
                            <th>KONTEN</th>
                            <th>SLUG</th>
                            <th>KATEGORI</th>
                            <th>STATUS</th>
                            <th>PUBLISH</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
</div>