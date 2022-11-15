<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
        <section class="clean-block clean-form">
            <div class="container" >
            	<div class="block-heading">
                    <h2 id="purple">Documentations</h2>
                    <p>Dokumentasi dari setiap seminar</p>
                </div>
				
				<div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($doc->getResultArray() as $d): ?>
                  <div class="col">
                    <div class="card h-100">
                        <a href="/ShowDoc/detailDoc/<?= $d['id']; ?>">
                            <img src="/assets/img/scenery/doc/image/<?= $d['image']; ?>" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="/ShowDoc/detailDoc/<?= $d['id']; ?>" id="card">
                                <h4 class="card-title"><strong><?= $d['nama']; ?></strong></h4>
                            </a>
                        </div>
                        <a href="/ShowDoc/detailDoc/<?= $d['id']; ?>" class="btn" id="daftar">Read Documentations</a>
                    </div>
                  </div>
                <?php endforeach; ?> 
                </div>

			</div>
		</section>
</main>


<?php $this->endSection(); ?>