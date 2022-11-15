<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
        <section class="clean-block clean-form">
            <div class="container" >
                
            	<div class="block-heading">
                    <h2 id="purple">Download</h2>
                    <p>Materi download dari setiap seminar</p>
                </div>
				
				<div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($card->getResultArray() as $row): ?>
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
                        <a href="/ShowCard/materi/<?= $row['id']; ?>" class="btn" id="daftar">Download Materi</a>
                    </div>
                  </div>
                <?php endforeach; ?> 
                </div>

			</div>
		</section>
</main>


<?php $this->endSection(); ?>