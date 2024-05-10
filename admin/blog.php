<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("location: login.php");
    exit;
}
include "header.php";
include "sidebar.php";
include "navbar.php";
include("config.php");

// Initialize message variable
$msg = "";


if (isset($_POST['submit'])) {

    
    $title = $_POST['title'];
        $description = $_POST['description'];
        $body = $_POST['body'];
        $img_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $img_new_name = time() . '_' . rand(100, 999) . '.' . $img_ext;

        // Upload the image
        $target_dir = "../admin/image/";
        $target_file = $target_dir . $img_new_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
            // Insert data into the database
            $sql = "INSERT INTO blog (title, description, body, image) VALUES ('$title', '$description', '$body', '$img_new_name')";
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('Record inserted successfully');</script>";
            } else {
                echo "<p>Error inserting record: " . mysqli_error($conn) . "</p>";
            }
        } else {
            echo "<p>Error uploading image.</p>";
        }

    
}

mysqli_close($conn);
?>

<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left d-flex align-items-center">
<h3 class="f_s_25 f_w_700 dark_text mr_30">Create blog</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Blog</li>
</ol>
</div>

<div class="main_content_iner ">
<div class="container-fluid p-0 sm_padding_15px">
    <form method="POST" enctype="multipart/form-data">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Title</h3>

</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2">max. content 255</h6>
<input type="text" class="form-control" maxlength="255" name="title" <?= htmlspecialchars($_POST['title'] ?? ''); ?> id="maxlength-default" placeholder="Enter text">
</div>
</div>
</div>
<div class="col-lg-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Description</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2">max. content 255</h6>
<input type="text" class="form-control" maxlength="255" name="description" <?= htmlspecialchars($_POST['description'] ?? ''); ?> id="maxlength-threshold" placeholder="Enter text">
</div>
</div>
</div>
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">image</h3>
</div>
</div>
</div>
<div class="white_card_body">
<input type="file" class="form-control" maxlength="255" name="image" <?= htmlspecialchars($_POST['image'] ?? ''); ?> id="maxlength-all-options" placeholder="Enter text">
</div>
</div>
</div>

<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Body</h3>
</div>
</div>
</div>
<div class="white_card_body">
<h6 class="card-subtitle mb-2">All your full content goes here</h6>
<textarea class="form-control"  rows="3" name="body" <?= htmlspecialchars($_POST['body'] ?? ''); ?> id="maxlength-textarea" placeholder="Enter text"></textarea>
<button type="submit" name="submit" class="btn btn-primary mt-5">Create blog</button>
</div>


</div>
</div>
</div>
</form>
</div>
</div>

<?php
include "footer.php"
?>