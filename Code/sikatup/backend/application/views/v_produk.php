<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Produk</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header TAMBAH DATA -->
    <section class="content">


        <?php echo $this->session->flashdata('message'); ?>
        <nav class="navbar navbar-default">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Produk</button>
        </nav>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Produk</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NAMA PRODUK</th>
                            <th>DESKRIPSI</th>
                            <th>HARGA</th>
                            <th>CP</th>
                            <th>STATUS</th>
                            <th>PUBLISH</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        <?php foreach ($produk as $pr) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><a href="<?= base_url() . $new = str_replace(' ', '%20', $pr->foto_produk); ?>" target="_blank"><img style="display: block; width: 100px; height: 100px;" src="<?= base_url() . $pr->foto_produk ?>" alt="post"></a></td>
                                <td><?= $pr->nama_produk; ?></td>
                                <td><?= substr(strip_tags($pr->deskripsi_produk), 0, 30) . '...'; ?></td>
                                <td><?= "Rp " . number_format($pr->harga_produk, 2, ',', '.') ?></td>
                                <td><?= $pr->cp_produk; ?></td>
                                <td><?php if ($pr->produk_status == 1) {
                                        echo '<span class="badge bg-success">Tersedia</span>';
                                    } else {
                                        echo '<span class="badge bg-danger">Tidak Tersedia</span>';
                                    } ?> </td>
                                <td><?= $pr->nama_pengurus; ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="<?= base_url() . 'produk/hapus/' . $pr->idProduk ?>" class="btn btn-danger" onclick="javascript: return confirm('YAKIN HAPUS PRODUK !? ')"><i class="fa fa-trash"></i></a>
                                        <a href="<?= base_url() . 'produk/edit/' . $pr->idProduk ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>FOTO</th>
                            <th>NAMA PRODUK</th>
                            <th>DESKRIPSI</th>
                            <th>HARGA</th>
                            <th>CP</th>
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




    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PRODUK</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'produk/tambah_aksi'; ?>">

                        <div class="form-group">
                            <label> Nama Produk :</label>
                            <input type="text" required name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Deskripsi :</label>
                            <textarea type="text" required name="deskripsi" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label> Harga :</label>
                            <input type="number" required name="harga" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label> CP : <small>ex: 6281111111</small></label>
                            <input type="number" required name="cp" class="form-control ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="foto_produk">
                                    <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Status :</label>
                            <select class="form-control" name="status">
                                <option value="1">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                        </div>

                        <button type="resset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>