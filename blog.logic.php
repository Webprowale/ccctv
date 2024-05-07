<?php
include("./config.php");
$query = "SELECT * FROM post";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="100ms">';
        echo '<article class="card card-style1 border-0 m-0 h-100">';
        echo '<div class="overflow-hidden img-card mb-2 rounded-top-md-5px">';
        echo '<img class="rounded-top-md-5px" src="' . $row['image'] . '" alt="' . $row['title'] . '">';
        echo '</div>';
        echo '<div class="card-body rounded-bottom-md-5px text-start p-4">';
        echo '<p class="text-primary font-weight-600">' . $row['create_at'] . '</p>';
        echo '<h3 class="h5 mb-3"><a href="./blog_detail.php?title=' . urlencode($row['title']) . '">' . $row['title'] . '</a></h3>';
        echo '<a href="./blog_detail.php?title=' . urlencode($row['title']) . '" class="font-weight-500">Read More &#10230;</a>';
        echo '</div>';
        echo '</article>';
        echo '</div>';
    }

    mysqli_free_result($result);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
