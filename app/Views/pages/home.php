<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

    <!-- main start -->
    <main class="page landing-page">

        <!-- home start -->
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image.jpg&quot;);color:rgba(113, 51, 142, 0.70);" id="home">
            <div class="text">
                <h2 class="title">Gunadarma University Seminar</h2>
                <p>The official website for information on seminars held with Gunadarma University.</p>
            </div>
        </section>
        <!-- home end -->

        <!-- Seminar List Start -->
        <section class="clean-block clean-form" id="SeminarList">
            <div class="container" >
                <div class="block-heading">
                    <h2 id="purple">Seminar List</h2>
                    <p>Bangun karirmu sebagai developer profesional</p>
                </div>

                <!-- Start Seminar List -->
                <!-- $card as $row ('SELECT' ANOTHER WAY -> LOOK AT THE CONTROLLER SHOWCARD) -->
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($card as $row): ?>
                  <div class="col">
                    <div class="card h-100">
                        <a href="/ShowCard/detail/<?= $row['id']; ?>">
                            <img src="/assets/img/scenery/cover/<?= $row['gambar']; ?>" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="/ShowCard/detail/<?= $row['id']; ?>" id="card">
                                <h4 class="card-title"><strong><?= $row['nama']; ?></strong></h4>
                                <p class="card-title">Pembicara : <?= $row['narasumber']; ?></p>
                            </a>
                        </div>
                        <a href="/ShowCard/detail/<?= $row['id']; ?>" class="btn" id="daftar">Read More</a>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg text-lg-left">
                                    <small class="text-muted" id="timing">Sampai <?= $row['periode']; ?></small>
                                </div>
                                <div class="col-lg-auto text-lg-right">
                                    <small class="text-muted">Maks Kuota : <?= $row['kuota']; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                <?php endforeach; ?> 
                </div>
                <div style="margin-top: 3%;">
                    <?= $pager->links('card', 'card_paginate'); ?>
                </div>
            </div>

        </section>

        <!-- Seminar List End -->

        <!-- slider start -->
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 id="purple">Photo Gallery</h2>
                </div>
                <div id="slider">
                    <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="w-100 d-block" src="assets/img/scenery/ug1.jpg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug2.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug3.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug4.jpg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug5.jpg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug6.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug7.jpeg" alt="Slide Image">
                            </div>
                            <div class="carousel-item">
                                <img class="w-100 d-block" src="assets/img/scenery/ug8.jpeg" alt="Slide Image">
                            </div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="5"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="6"></li>
                            <li data-bs-target="#carousel-1" data-bs-slide-to="7"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider end -->
        
    </main>
    <!-- main end -->

<?php $this->endSection(); ?>