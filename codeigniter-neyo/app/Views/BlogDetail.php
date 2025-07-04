<?= $this->extend('Layout'); ?>
<?= $this->section('content') ?>
   <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background top-position1" data-overlay-dark="5" data-background="img/bg/bg-01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog Detail</h1>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog Detail</li>
                        </ul>                    
                    </div>
                </div>
            </div>
            <span class="triangle-3 z-index-1 d-none d-sm-inline-block"></span>
            <span class="triangle-4 z-index-1 d-none d-sm-inline-block"></span>
            <img src="img/content/dots2.png" class="position-absolute right-5 bottom-5 ani-top-bottom z-index-3 d-none d-sm-block" alt="...">
            <div class="page-title-round ani-move"></div>
        </section>

        <!-- BLOG DETAIL
        ================================================== -->
        <section>
            <div class="container">
                <div class="row mt-n2-9 justify-content-center">
                    <div class="col-lg-10 mt-2-9">
                        <article class="card card-style5 border-color-extra-light-gray border-radius-5">
                             <!-- include("./read/blog.id.php") ?> -->
                        </article>
                       
                        </div>
                       
                      
                    </div>
                    
                </div>
            </div>
        </section>

<?= $this->endSection() ?>