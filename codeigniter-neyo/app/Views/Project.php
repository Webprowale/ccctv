<?= $this->extend('Layout'); ?>
<?= $this->section('content') ?>
   <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background top-position1" data-overlay-dark="5" data-background="img/bg/bg-01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Portfolio</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Portfolio</li>
                        </ul>                    
                    </div>
                </div>
            </div>
            <span class="triangle-3 z-index-1 d-none d-sm-inline-block"></span>
            <span class="triangle-4 z-index-1 d-none d-sm-inline-block"></span>
            <img src="img/content/dots2.png" class="position-absolute right-5 bottom-5 ani-top-bottom z-index-3 d-none d-sm-block" alt="...">
            <div class="page-title-round ani-move"></div>
        </section>

        <!-- PROJECT STYLE 1
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n1-9 portfolio-gallery">
                    <!-- include("./read/project.main.php") ?> -->
                </div>
            </div>
        </section>

<?= $this->endSection() ?>