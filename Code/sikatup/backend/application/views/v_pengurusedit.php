<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pengurus</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Pengurus</a></li>
                        <li class="breadcrumb-item active">Edit Pengurus</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content col-8 mx-auto">
        <div class="card-body register-card-body">
            <?php foreach ($pengurus_edit as $pre); ?>
            <form action="<?php echo base_url() . 'pengurus/update'; ?>" enctype="multipart/form-data" method="post">

                <div class="form-group">
                    <label> Nama Pengurus :</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $pre->idPengurus ?>">
                    <input type="text" name="nama" class="form-control text" value="<?php echo $pre->nama_pengurus; ?>">
                </div>
                <div class="form-group">
                    <label> Username :</label>
                    <input type="text" name="username" class="form-control text" value="<?php echo $pre->username; ?>">
                </div>
                <div class="form-group">
                    <label> Alamat :</label>
                    <input type="text" name="alamat" class="form-control text " value="<?php echo $pre->alamat; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto :
                        <a href="<?= base_url() . $new = str_replace(' ', '%20', $pre->foto); ?>" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fa fa-eye"></i> Preview
                        </a>
                    </label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="foto">
                            <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label> No WA :</label>
                    <input type="number" name="no_wa" class="form-control text " value="<?php echo $pre->no_wa; ?>">
                </div>
                <div class="form-group">
                    <label> Status :</label>

                    <select class="form-control" name="status">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Role :</label>

                    <select class="form-control" name="role">
                        <option value="1">Administrator</option>
                        <option value="2">Staff</option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Jabatan :</label>
                    <select class="form-control" name="jabatan">
                        <option value="1">Ketua Umum</option>
                        <option value="2">Wakil Ketua</option>
                        <option value="3">Sekretaris I</option>
                        <option value="4">Sekretaris II</option>
                        <option value="5">Bendahara I</option>
                        <option value="6">Bendahara II</option>
                        <option value="7">Staff Anggota</option>
                    </select>
                </div>
                <a href="<?= base_url('pengurus') ?>" type="resset" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php; ?>
        </div>
    </section>
</div>