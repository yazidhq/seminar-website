<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
	<section class="clean-block clean-form">
        <div class="container" >

        	<div class="block-heading">
				<h2 id="purple">Dokumentasi <?= $doc['nama']; ?></h2>
            </div>

            <section class="portfolio-block projects-cards" style="margin-top:-90px;">

	               <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
			    <div class="row py-3 shadow-5">
			      <div class="col-12 mb-1">
			        <div class="lightbox">
			              <img
			          src="/assets/img/scenery/doc/image/<?= $doc['image']; ?>"
			          alt="Gallery image 1"
			          class="ecommerce-gallery-main-img active w-100"/>
			        </div>
			      </div>
			    </div>
	               </div>

		   
		        <div class="container">
		           <div class="row">
		               <div class="col-md-6 col-lg-4">
		                   <div class="card border-0"><img class="card-img-top scale-on-hover" src="/assets/img/scenery/doc/image/<?= $doc['1st-img']; ?>" alt="Card Image">
		                   </div>
		               </div>
		               <div class="col-md-6 col-lg-4">
		                   <div class="card border-0"><img class="card-img-top scale-on-hover" src="/assets/img/scenery/doc/image/<?= $doc['2nd-img']; ?>" alt="Card Image">
		                   </div>
		               </div>
		               <div class="col-md-6 col-lg-4">
		                   <div class="card border-0"><img class="card-img-top scale-on-hover" src="/assets/img/scenery/doc/image/<?= $doc['3rd-img']; ?>" alt="Card Image">
		                   </div>
		              </div>
		               <div class="col-md-6 col-lg-4">
		                   <div class="card border-0"><img class="card-img-top scale-on-hover" src="/assets/img/scenery/doc/image/<?= $doc['4th-img']; ?>" alt="Card Image">
		                    </div>
		                </div>
		                <div class="col-md-6 col-lg-4">
		                    <div class="card border-0"><img class="card-img-top scale-on-hover" src="/assets/img/scenery/doc/image/<?= $doc['5th-img']; ?>" alt="Card Image">
		                    </div>
		                </div>
		                <div class="col-md-6 col-lg-4">
		                    <div class="card border-0"><img class="card-img-top scale-on-hover" src="/assets/img/scenery/doc/image/<?= $doc['6th-img']; ?>" alt="Card Image">
		                    </div>
		                </div>
		           </div>
		        </div>

			    <!-- video -->
				<div class="ratio ratio-16x9">
				  <iframe src="<?= $doc['video']; ?>" title="YouTube video" allowfullscreen></iframe>
				</div>
				<div class="card-body">
					<h6>Video Documentations</h6>
				</div>
				<!-- video -->

				<div class="embed-responsive" style="margin-top: 3%;">
				    <object data="/assets/img/scenery/doc/ppt/<?= $doc['ppt']; ?>" type="application/pdf" width="100%" height="500px"></object>
				</div>
				<div class="card-body" style="margin-bottom: -9%;">
					<h6>Materi PDF</h6>
				</div>

		    </section>
			
		    <!-- <div class="active">
		      <video class="img-fluid" autoplay loop muted>
		        <source src="/assets/img/scenery/doc/video/{DOC['VIDEO']}" type="video/mp4" />
		      </video>
		    </div> -->	

		</div>
	</section>
</main>

<?php $this->endSection(); ?>