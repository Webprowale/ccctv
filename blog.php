<?php
  $pageTitle = "Blog";
  require "./header.php";
?>

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background top-position1" data-overlay-dark="5" data-background="img/bg/bg-01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li>Blog </li>
                        </ul>                    
                    </div>
                </div>
            </div>
            <span class="triangle-3 z-index-1 d-none d-sm-inline-block"></span>
            <span class="triangle-4 z-index-1 d-none d-sm-inline-block"></span>
            <img src="img/content/dots2.png" class="position-absolute right-5 bottom-5 ani-top-bottom z-index-3 d-none d-sm-block" alt="...">
            <div class="page-title-round ani-move"></div>
        </section>

        <!-- BLOG GRID
        ================================================== -->
        <section>
            <div class="container">
                <div class="row gx-xxl-5 mt-n2-9">
                    <?php include("./read/blog.logic.php") ?>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="100ms">
                        <article class="card card-style1 border-0 m-0 h-100">
                            <div class="overflow-hidden img-card mb-2 rounded-top-md-5px">
                                <img class="rounded-top-md-5px" src="img/blog/blog-01.jpg" alt="How to learn about cctv security in only 10 days.">
                            </div>
                            <div class="card-body rounded-bottom-md-5px text-start p-4">
                                <p class="text-primary font-weight-600">January 20, 2023</p>
                                <h3 class="h5 mb-3"><a href="blog-detail.html">How to learn about cctv security in only 10 days.</a></h3>
                                <a href="blog-detail.html" class="font-weight-500">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="150ms">
                        <article class="card card-style1 border-0 m-0 h-100">
                            <div class="overflow-hidden img-card mb-2 rounded-top-md-5px">
                                <img class="rounded-top-md-5px" src="img/blog/blog-02.jpg" alt="Here’s what people are saying about security.">
                            </div>
                            <div class="card-body rounded-bottom-md-5px text-start p-4">
                                <p class="text-primary font-weight-600">January 20, 2023</p>
                                <h3 class="h5 mb-3"><a href="blog-detail.html">Here’s what people are saying about security.</a></h3>
                                <a href="blog-detail.html" class="font-weight-500">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="card card-style1 border-0 m-0 h-100">
                            <div class="overflow-hidden img-card mb-2 rounded-top-md-5px">
                                <img class="rounded-top-md-5px" src="img/blog/blog-03.jpg" alt="Five reasons why you should invest in cctv camera.">
                            </div>
                            <div class="card-body rounded-bottom-md-5px text-start p-4">
                                <p class="text-primary font-weight-600">January 20, 2023</p>
                                <h3 class="h5 mb-3"><a href="blog-detail.html">Five reasons why you should invest in cctv camera.</a></h3>
                                <a href="blog-detail.html" class="font-weight-500">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="100ms">
                        <article class="card card-style1 border-0 m-0 h-100">
                            <div class="overflow-hidden img-card mb-2 rounded-top-md-5px">
                                <img class="rounded-top-md-5px" src="img/blog/blog-04.jpg" alt="Seven doubts you should clarify about security.">
                            </div>
                            <div class="card-body rounded-bottom-md-5px text-start p-4">
                                <p class="text-primary font-weight-600">January 20, 2023</p>
                                <h3 class="h5 mb-3"><a href="blog-detail.html">Seven doubts you should clarify about security.</a></h3>
                                <a href="blog-detail.html" class="font-weight-500">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="150ms">
                        <article class="card card-style1 border-0 m-0 h-100">
                            <div class="overflow-hidden img-card mb-2 rounded-top-md-5px">
                                <img class="rounded-top-md-5px" src="img/blog/blog-05.jpg" alt="Common misconceptions about cctv in home.">
                            </div>
                            <div class="card-body rounded-bottom-md-5px text-start p-4">
                                <p class="text-primary font-weight-600">January 20, 2023</p>
                                <h3 class="h5 mb-3"><a href="blog-detail.html">Common misconceptions about cctv in home.</a></h3>
                                <a href="blog-detail.html" class="font-weight-500">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                        <article class="card card-style1 border-0 m-0 h-100">
                            <div class="overflow-hidden img-card mb-2 rounded-top-md-5px">
                                <img class="rounded-top-md-5px" src="img/blog/blog-06.jpg" alt="Things that you never expect on cctv installation.">
                            </div>
                            <div class="card-body rounded-bottom-md-5px text-start p-4">
                                <p class="text-primary font-weight-600">January 20, 2023</p>
                                <h3 class="h5 mb-3"><a href="blog-detail.html">Things that you never expect on cctv installation.</a></h3>
                                <a href="blog-detail.html" class="font-weight-500">Read More &#10230;</a>
                            </div>
                        </article>
                    </div>
                    <!-- start pager  -->
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                    </div>
                    <!-- end pager -->
                </div>
            </div>
        </section>

       <!-- FOOTER
        ================================================== -->
        <?php require "./footer.php"; ?>

        <!-- ================================================== -->