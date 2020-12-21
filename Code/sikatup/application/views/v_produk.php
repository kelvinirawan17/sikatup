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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Produk Kel Kebonsari</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Produk</a></li>
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

    <!-- Courses area start -->
    <div class="courses-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Produk Kel Kebonsari</h2>
                    </div>
                </div>
            </div>
            <section class="blog_area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mb-5 mb-lg-0">
                            <div class="blog_left_sidebar">
                                <?php foreach ($produk as $pr) : ?>
                                    <article class="blog_item">
                                        <!-- Single -->
                                        <div class="properties__card mb-5 mr-5">
                                            <div class="properties__img overlay1">
                                                <a href="<?= base_url() . 'backend/' . $new = str_replace(' ', '%20', $pr->foto_produk); ?>" target="_blank"><img style="display: block; width: 300px; height: 300px;" class="rounded mx-auto d-block" src="<?= base_url() . 'backend/' . $pr->foto_produk ?>" alt=""></a>
                                            </div>
                                            <div class="properties__caption">
                                                <h3><a href="#"><?= $pr->nama_produk ?></a></h3>
                                                <p>Di Post Oleh: <?= $pr->nama_pengurus ?></p>
                                                <!-- <p><?= substr(strip_tags($pr->deskripsi_produk), 0, 30) . '...'; ?></p> -->
                                                <p><?= $pr->deskripsi_produk ?></p>
                                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                                    <div class="price">
                                                        <span>Harga</span>
                                                    </div>
                                                    <div class="price">
                                                        <span><?= "Rp " . number_format($pr->harga_produk, 2, ',', '.') ?></span>
                                                    </div>
                                                </div>
                                                <a target="_blank" href="https://wa.me/<?= $pr->cp_produk ?>" class="border-btn border-btn2"><i class="fab fa-whatsapp"></i>Hubungi via WA</a>
                                            </div>
                                        </div>
                                        <!-- Single -->
                                    </article>
                                <?php endforeach; ?>
                                <?php if ($_SERVER['REQUEST_URI'] == '/sikatup/produk/search') {
                                } else {
                                    echo $this->pagination->create_links();
                                } ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog_right_sidebar">
                                <aside class="single_sidebar_widget search_widget">
                                    <form action="<?= base_url() . 'produk/search' ?>" method="POST">
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Courses area End -->
</main>