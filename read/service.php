<?php
include("./admin/config.php");
$query = "SELECT * FROM servce";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card card-style1">';
        echo '<div class="service-card bg-img cover-background" data-background="./admin/image/'.$row['image'].'">';
        echo '<div class="service-details">';
        echo '<h3 class="mb-3 h5"><a href="our-service.php">'.$row['title'].'</a></h3>';
        echo '<p class="mb-3">'.$row['description'].'</p>';
        echo '<a href="./our-services.php">Read More &#10230;</a>';
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
