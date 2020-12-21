<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Artikel</a></li>
                        <li class="breadcrumb-item active">Tambah Artikel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content col-10 mx-auto">
        <div class="card-body register-card-body">
            <?php foreach ($artikel as $ar); ?>
            <form action="<?php echo base_url() . 'artikel/update'; ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label> Judul Kegiatan :</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $ar->idKegiatan ?>">
                    <input type="text" name="judul" class="form-control text" value="<?php echo $ar->judul_kegiatan ?>">
                </div>
                <div class="form-group">
                    <label> Slug :</label>
                    <small>ex: pengumuman-juara-lomba</small>
                    <input type="text" name="slug" class="form-control text" value="<?php echo $ar->slug ?>">
                </div>
                <div class="form-group">
                    <label> Kategori :</label>

                    <select class="form-control" name="kategori">
                        <option value="1">Pengumuman</option>
                        <option value="0">Kegiatan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label> Konten :</label>
                    <div class="card-body">
                        <textarea id="summernote" name="konten"><?php echo $ar->konten ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto :
                        <a href="<?= base_url() . $new = str_replace(' ', '%20', $ar->thumbnail); ?>" target="_blank" class="btn btn-primary btn-sm">
                            <i class="fa fa-eye"></i> Preview
                        </a>
                    </label>
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
                <a href="<?= base_url('artikel') ?>" type="resset" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php; ?>
        </div>
    </section>
</div>