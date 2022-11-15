<?php $this->extend('layout/templates'); ?>

<?php $this->section('content'); ?>

<main class="page landing-page">
<section class="clean-block clean-form dark" id="contact">
    <div class="container">
        <div class="block-heading">
            <h2 id="purple">Seminar Documentations</h2>
        </div>
        <form action="save_doc" method="post" enctype="multipart/form-data">
            <?php csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label" for="nama">Nama Seminar</label>
                <input class="form-control" type="text" id="nama" name="nama" required>
            </div>

            <!-- Video Upload -->
            <!-- <div class="mb-3">
                <label class="form-label" for="video">Choose Video</label>
                <input class="form-control" type="file" id="video" name="video" ></input>
            </div> -->
            <div class="mb-3">
                <label class="form-label" for="video">Link YT Video</label>
                <input class="form-control" type="text" id="video" name="video" required>
            </div>
            <!-- File -->

            <!-- Image Upload -->
            <div class="mb-3">
                <label class="form-label" for="image">Choose Cover</label>
                <input class="form-control" type="file" id="image" name="image" ></input>
            </div>
            <!-- Image -->

            <!-- 1 Upload -->
            <div class="mb-3">
                <label class="form-label" for="1st-img">1st-img</label>
                <input class="form-control" type="file" id="1st-img" name="1st-img" ></input>
            </div>
            <!-- Image -->

            <!-- 2 Upload -->
            <div class="mb-3">
                <label class="form-label" for="2nd-img">2nd-img</label>
                <input class="form-control" type="file" id="2nd-img" name="2nd-img" ></input>
            </div>
            <!-- Image -->

            <!-- 3 Upload -->
            <div class="mb-3">
                <label class="form-label" for="3rd-img">3rd-img</label>
                <input class="form-control" type="file" id="3rd-img" name="3rd-img" ></input>
            </div>
            <!-- Image -->

            <!-- 4 Upload -->
            <div class="mb-3">
                <label class="form-label" for="4th-img">4th-img</label>
                <input class="form-control" type="file" id="4th-img" name="4th-img" ></input>
            </div>
            <!-- Image -->

            <!-- 5 Upload -->
            <div class="mb-3">
                <label class="form-label" for="5th-img">5th-img</label>
                <input class="form-control" type="file" id="5th-img" name="5th-img" ></input>
            </div>
            <!-- Image -->

            <!-- 6 Upload -->
            <div class="mb-3">
                <label class="form-label" for="6th-img">6th-img</label>
                <input class="form-control" type="file" id="6th-img" name="6th-img" ></input>
            </div>
            <!-- Image -->

            <!-- PPT Upload -->
            <div class="mb-3">
                <label class="form-label" for="ppt">File PPT (PDF)</label>
                <input class="form-control" type="file" id="ppt" name="ppt" ></input>
            </div>
            <!-- PPT Upload -->

            <div class="mb-3">
                <button class="btn" id="background" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
</main>


<?php $this->endSection(); ?>