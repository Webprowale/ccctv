<?php
include("./admin/config.php");

$query = "SELECT * FROM faq ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        echo '<h2 class="card-header" id="heading' . $row['id'] . '">';
        echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $row['id'] . '" aria-expanded="true" aria-controls="collapse' . $row['id'] . '">';
        echo $row['heading'];
        echo '</button>';
        echo '</h2>';
        echo '<div id="collapse' . $row['id'] . '" class="accordion-collapse collapse" aria-labelledby="heading' . $row['id'] . '" data-bs-parent="#accordion">';
        echo '<div class="card-body">';
        echo $row['fullWord'];
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
