<?php
include("./config.php");
$query = "SELECT * FROM post";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
       
    }

    mysqli_free_result($result);
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
