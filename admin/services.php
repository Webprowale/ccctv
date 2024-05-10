<?php
session_start();
include("config.php");
include "header.php";
include "sidebar.php";
include "navbar.php";


// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("location: login.php");
    exit;
}
?>

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Create Services </h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">service</li>
                        </ol>
                    </div>
                </div>
            </div>
            <?php
            // Initialize message variable
            $msg = "";

            // Check if the form is submitted
            if (isset($_POST['submit'])) {
                // Get form data
                $title = $_POST['title'];
                $description = $_POST['description'];
                $img_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                $img_new_name = time() . '_' . rand(100, 999) . '.' . $img_ext;
        
                // Upload the image
                $target_dir = "../admin/image/";
                $target_file = $target_dir . $img_new_name;
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
                    // Insert data into the database
                    $sql = "INSERT INTO servce (title, description, image) VALUES ('$title', '$description', '$img_new_name')";
                    if(mysqli_query($conn, $sql)){
                        echo "<script>alert('Services added');</script>";
                    } else {
                        echo "<p>ailed to add Service: " . mysqli_error($conn) . "</p>";
                    }
                } else {
                    echo "<p>Error uploading image.</p>";
                }

            }
            mysqli_close($conn);
            ?>
            <div class="col-lg-10">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h4 class="text-center"><?= htmlspecialchars($msg); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input required type="text" class="form-control" name="title" <?= htmlspecialchars($_POST['title'] ?? ''); ?> id="inputAddress" placeholder="title">
                                </div>
                                <div class="mb-3">
                                    <input required type="text" class="form-control" name="description" <?= htmlspecialchars($_POST['description'] ?? ''); ?> id="inputAddress" placeholder="description">
                                </div>
                                <div class="mb-3">
                                    <input required type="file" class="form-control" name="image" <?= htmlspecialchars($_POST['image'] ?? ''); ?> id="inputAddress" placeholder="image">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Add Testimonial</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>