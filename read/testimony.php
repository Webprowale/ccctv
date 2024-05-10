<?php
include("./admin/config.php");
$query = "SELECT * FROM testimonials";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="bg-white pt-2-9 p-1-9 border-radius-10 inner-text">';
        echo '<p class="mb-1-6 lead">' . $row['content'] . '</p>';
        echo '<h6 class="mb-0">' . $row['name'] . '</h6>';
        echo '<span class="small">' . $row['role'] . '</span>';
        echo '</div>';
    }

    mysqli_free_result($result);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
