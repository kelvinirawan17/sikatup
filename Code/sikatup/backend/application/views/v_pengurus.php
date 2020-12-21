<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Pengurus</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengurus</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header TAMBAH DATA -->
    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <nav class="navbar navbar-default">
            <a class="btn btn-primary" href="<?= base_url() . 'pengurus/tambah_aksi' ?>"><i class="fa fa-plus"></i>Tambah Data Pengurus</a>
        </nav>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pengurus</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NAMA</th>
                            <th>USERNAME</th>
                            <th>ALAMAT</th>
                            <th>NO WA</th>
                            <th>JABATAN</th>
                            <th>ROLE</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        <?php foreach ($pengurus_list as $prl) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><a href="<?= base_url() . $new = str_replace(' ', '%20', $prl->foto); ?>" target="_blank"><img style="display: block; width: 100px; height: 100px;" src="<?= base_url() . $prl->foto ?>" alt="post"></a></td>
                                <td><?= $prl->nama_pengurus; ?></td>
                                <td><?= $prl->username; ?></td>
                                <td><?= substr(strip_tags($prl->alamat), 0, 30) . '...'; ?></td>
                                <td><?= $prl->no_wa; ?></td>
                                <td><?= $prl->nama_jabatan; ?></td>
                                <td><?php if ($prl->role == 1) {
                                        echo '<span class="badge bg-success">Administrator</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Staff</span>';
                                    } ?> </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?= base_url() . 'pengurus/hapus/' . $prl->idPengurus ?>" class="btn btn-danger" onclick="javascript: return confirm('YAKIN HAPUS PENGURUS !? ')"><i class="fa fa-trash"></i></a>
                                        <a href="<?= base_url() . 'pengurus/edit/' . $prl->idPengurus ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NAMA</th>
                            <th>USERNAME</th>
                            <th>ALAMAT</th>
                            <th>NO WA</th>
                            <th>JABATAN</th>
                            <th>ROLE</th>
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>