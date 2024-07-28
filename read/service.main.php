<?php
    include("./admin/config.php");
    $query = "SELECT * FROM servce";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="col-md-6 col-lg-4 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                    <div class="card card-style1 m-0 border-0">
                        <div class="overflow-hidden img-card">
                            <img src="./admin/image/' . $row['image'] . '" alt="Image" style="width:100%; min-height:400px; max-height:400px;" />
                        </div>
                        <div class="card-body rounded-bottom-md-5px">
                            <h3 class="mb-3 h4"><a>' . $row['title'] . '</a></h3>
                            <p class="mb-3">' . $row['description'] . '</p>
                        </div>
                    </div>
                </div>
            ';
        }

        mysqli_free_result($result);
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

   
