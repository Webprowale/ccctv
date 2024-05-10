<?php

    while ($row = mysqli_fetch_assoc($results)) {
        echo '<div class="overflow-hidden img-card wow fadeIn" data-wow-delay="100ms">';
        echo '<img src="./admin/image' . $row['image'] . '" class="rounded-top-md-5px" alt="' . $row['title'] . '">';
        echo '</div>';
        echo '<div class="card-body p-1-6 p-lg-2-6">';
        echo '<ul class="entry-meta wow fadeIn ps-0" data-wow-delay="100ms">';
        echo '<li class="d-inline-block text-capitalize me-3"><i class="ti-user text-primary pe-2"></i><a href="#!">admin</a></li>';
        echo '<li class="d-inline-block me-3">'. $row['create_at']. '</li>';
        echo '</ul>';
        echo '<div class="page-content">';
        echo '<div class="row mb-2-2 wow fadeIn" data-wow-delay="100ms">';
        echo '<div class="col-lg-12">';
        echo '<p class="w-95">' . $row['description'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="row mt-n1-6 mb-2-2">';
        echo '<div class="col-xl-6 mt-1-6 wow fadeIn" data-wow-delay="100ms"><img src="img/blog/blog-detail-02.jpg" class="border-radius-5" alt="#!"></div>';
        echo '<div class="col-xl-6 mt-1-6 wow fadeIn" data-wow-delay="100ms">';
        echo '<div class="d-table rounded h-100">';
        echo '<div class="d-table-cell vertical-align-middle position-relative z-index-1">';
        echo '<blockquote class="m-0">';
        echo '<p class="mb-0"><i class="fas fa-quote-left fs-2 mb-3"></i></p>';
        echo '<p class="fs-5 font-weight-400 mb-2">“It really saves my time and effort. cctv security is exactly what our business has been lacking.”</p>';
        echo '<p class="mb-0"><cite>– Alicia Hauslaib</cite></p>';
        echo '</blockquote>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="row mb-2-2 wow fadeIn" data-wow-delay="100ms">';
        echo '<div class="col-lg-12">';
        echo '<h3 class="mb-3 h4">' . $row['title'] . '</h3>';
        echo '<p class="w-95">' . $row['body'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }


?>
