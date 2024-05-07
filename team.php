<?php
include("./config.php");
$query = "SELECT * FROM team";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card card-style2">';
        echo '<div class="position-relative z-index-9">';
        echo '<img src="' . $row['image_url'] . '" alt="...">';
        echo '<div class="team-social-icon">';
        echo '<ul class="list-unstyled mb-0">';
        echo '<li><a href="' . $row['facebook'] . '"><i class="fab fa-facebook-f"></i></a></li>';
        echo '<li><a href="' . $row['twitter'] . '"><i class="fab fa-twitter"></i></a></li>';
        echo '<li><a href="' . $row['instagram'] . '"><i class="fab fa-instagram"></i></a></li>';
        echo '<li><a href="' . $row['linkedin'] . '"><i class="fab fa-linkedin-in"></i></a></li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '<div class="card-body position-relative z-index-9">';
        echo '<h3 class="h5 mb-0">' . $row['name'] . '</h3>';
        echo '<p class="mb-0 small">' . $row['position'] . '</p>';
        echo '</div>';
        echo '</div>';
    }

    mysqli_free_result($result);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
