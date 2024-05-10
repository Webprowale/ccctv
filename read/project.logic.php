<?php
include("./admin/config.php");
$query = "SELECT * FROM project";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card card-style4">';
        echo '<img src="./admin/image/' . $row['image'] .'" alt="...">';
        echo '<div class="card-body">';
        echo '<div class="portfolio-overlay-info">';
        echo '<h3 class="h4"><a href="./project.php" class="text-white">' . $row['project_name'] . '</a></h3>';
        echo '<span class="text-white opacity9 display-28">' . $row['category'] . '</span>';
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
