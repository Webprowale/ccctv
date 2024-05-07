<?php
include("./config.php");
$query = "SELECT * FROM faq";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        echo '<h2 class="card-header" id="headingOne">';
        echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">';
        echo $row['question'];
        echo '</button>';
        echo '</h2>';
        echo '<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">';
        echo '<div class="card-body">';
        echo $row['answer'];
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
