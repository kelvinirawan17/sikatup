<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('produk') ?>">Produk</a></li>
                        <li class="breadcrumb-item active">Edit Produk</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content col-8 mx-auto">
        <div class="card-body register-card-body">
            <?php foreach ($produk as $pr); ?>
            <form action="<?php echo base_url() . 'produk/update'; ?>" enctype="multipart/form-data" method="post">

                <div class="form-group">
                    <label> Nama Produk :</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $pr->idProduk ?>">
                    <input type="text" name="nama" class="form-control text" value="<?php echo $pr->nama_produk; ?>">
                </div>
                <div class="form-group">
                    <label> Deskripsi :</label>
                    <input type="text" name="deskripsi" class="form-control text" value="<?php echo $pr->deskripsi_produk; ?>">
                </div>
                <div class="form-group">
                    <label> Harga :</label>
                    <input type="text" name="harga" class="form-control text " value="<?php echo $pr->harga_produk; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Foto :
                        <a href="<?= base_url() . $new = str_replace(' ', '%20', $pr->foto_produk); ?>" target="_blank" class="btn btn-primary btn-sm">
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
                    <label> CP :</label>
                    <input type="text" name="cp" class="form-control text " value="<?php echo $pr->cp_produk; ?>">
                </div>
                <div class="form-group">
                    <label> Status :</label>

                    <select class="form-control" name="status">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
                <a href="<?= base_url('produk') ?>" type="resset" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            <?php; ?>
        </div>
    </section>
</div>