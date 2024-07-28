<?php

    while ($row = mysqli_fetch_assoc($results)) {
        echo '<div class="overflow-hidden img-card wow fadeIn pt-3" data-wow-delay="100ms">';
        echo '<img src="./admin/image/' . $row['image'] . '" class="rounded-top-md-5px" alt="' . $row['title'] . '"/>';
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
