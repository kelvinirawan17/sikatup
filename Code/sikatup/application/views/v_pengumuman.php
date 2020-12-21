<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Pengumuman / Kegiatan</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pengumuman</a></li>
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php foreach ($kegiatan as $kgt) : ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0 mx-auto d-block" style="width: 35%" src="<?= base_url() . 'backend/' . $kgt->thumbnail ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3><?php $date = date_create($kgt->create);
                                            echo date_format($date, "d M Y"); ?></h3>
                                        <p><?= date_format($date, "H:i") . ' WIB' ?></p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?= base_url() ?>pengumuman/view/<?= $kgt->slug ?>">
                                        <h2 class="blog-head" style="color: #2d2d2d;"><?= $kgt->judul_kegiatan ?></h2>
                                    </a>
                                    <p><?= substr(strip_tags($kgt->konten), 0, 150) . '...'; ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i><?= $kgt->nama_pengurus ?></a></li>
                                        <?php if ($kgt->kategori == 1) { ?>
                                            <li><a href="#"><i class="fa fa-comments"></i> Pengumuman</a></li>
                                        <?php } else { ?>
                                            <li><a href="#"><i class="fa fa-comments"></i> Kegiatan</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <?php if ($_SERVER['REQUEST_URI'] == '/sikatup/pengumuman/search') {
                        } else {
                            echo $this->pagination->create_links();
                        } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="<?= base_url() . 'pengumuman/search' ?>" method="POST">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="keyword" class="form-control" placeholder="Cari Data">
                                        <div class="input-group-append">
                                            <button class="submit" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Kategori</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="<?= base_url() . 'pengumuman' ?>" class="d-flex">
                                        <p>Semua</p>
                                        <p><?= '(' . $total . ')' ?></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() . 'pengumuman/kategori/1' ?>" class="d-flex">
                                        <p>Pengumuman</p>
                                        <p><?= '(' . $total_peng . ')' ?></p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() . 'pengumuman/kategori/0' ?>" class="d-flex">
                                        <p>Kegiatan</p>
                                        <p><?= '(' . $total_keg . ')' ?></p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;">Postingan Terbaru</h3>
                            <?php foreach ($kegiatan_baru as $kgb) : ?>
                                <div class="media post_item">
                                    <img class="mx-auto d-block" style="width: 25%" src="<?= base_url() . 'backend/' . $kgb->thumbnail ?>" alt="post">
                                    <div class="media-body">
                                        <a href="<?= base_url() . 'pengumuman/view/' . $kgb->slug ?>">
                                            <h3 style="color: #2d2d2d;"><?= $kgb->judul_kegiatan ?></h3>
                                        </a>
                                        <?php $date = date_create($kgb->create); ?>
                                        <p><?= date_format($date, "D, d M Y"); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>