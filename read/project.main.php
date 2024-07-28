<?php
include("./admin/config.php");

$query = "SELECT * FROM project";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-6 col-lg-4 mt-1-9 wow fadeIn" data-wow-delay="100ms" data-src="./admin/image/' . $row['image'] . '" data-sub-html="<h4 class=\'text-white\'>' . $row['project_name'] . '</h4><p>' . $row['category'] . '</p>">';
        echo '<div class="card card-style4">';
        echo '<img src="./admin/image/' . $row['image'] . '" alt="' . $row['project_name'] . '"style="max-height:450px;" />';
        echo '<div class="card-body">';
        echo '<div class="portfolio-overlay-info">';
        echo '<h3 class="h5"><a href="#!" class="text-white">' . $row['project_name'] . '</a></h3>';
        echo '<span class="text-white opacity9 display-29">' . $row['category'] . '</span>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    mysqli_free_result($result);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
