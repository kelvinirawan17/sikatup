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
                                <h1 data-animation="bounceIn" data-delay="0.2s">Pengurus Karang Taruna</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Pengurus</a></li>
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
    <!--? Team -->
    <section class="team-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Badan Pengurus Harian di Karang Taruna</h2>
                    </div>
                </div>
            </div>
            <div class="team-active">
                <?php foreach ($bph as $b) : ?>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img class="rounded-circle" src="<?= base_url() . 'backend/' . $b->foto ?>" alt="100x100" style="width: 50%;">
                        </div>
                        <div class="cat-cap">
                            <h2><?= $b->nama_pengurus ?></h2>
                            <h3><?= $b->nama_jabatan ?></h3>
                            <p><?= $b->alamat ?></p>
                            <a target="_blank" href="https://wa.me/<?= $b->no_wa ?>" class="border-btn border-btn2"><i class="fab fa-whatsapp"></i>Hubungi via WA</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--? Team -->
    <section class="team-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <h2>Staff Pengurus Karang Taruna</h2>
                    </div>
                </div>
            </div>
            <div class="team-active">
                <?php foreach ($staff as $sf) : ?>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img class="rounded-circle" src="<?= base_url() . 'backend/' . $sf->foto ?>" alt="100x100" style="width: 50%;">
                        </div>
                        <div class="cat-cap">
                            <h2><?= $sf->nama_pengurus ?></h2>
                            <h3><?= $sf->nama_jabatan ?></h3>
                            <p><?= $sf->alamat ?></p>
                            <a target="_blank" href="https://wa.me/<?= $sf->no_wa ?>" class="border-btn border-btn2"><i class="fab fa-whatsapp"></i>Hubungi via WA</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>