<?php
include "header.php";
include "sidebar.php";
include "navbar.php";
?>

<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3> Add team</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-end">
<p><a href="index.php">home</a> <i class="fas fa-caret-right"></i> team</p>
</div>
</div>
</div>
</div>
</div>

<?php
// Establish database connection
include("config.php");


// Initialize message variable
$msg = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $selected_value = $_POST['role'];
   
    $fb_handle = $_POST['fb_handle'];
    $ig_handle = $_POST['ig_handle'];
    $tw_handle = $_POST['tw_handle'];

    // Generate a random number for the image file name
    $random_number = rand(1000, 9999);
    $image_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $image_new_name = $random_number . '.' . $image_extension;

    $target_dir = "./admin/image";
    $target_file = $target_dir . $image_new_name;

    // Move the uploaded image to the target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $msg = "File uploaded successfully!";
    } else {
        $msg = "Failed to upload file!";
    }

    // Insert data into the database with the generated random number as image name
    $sql = "INSERT INTO team (name, position, image, fb_handle, ig_handle, tw_handle) VALUES ('$name', '$position', '$random_number', '$fb_handle', '$ig_handle', '$tw_handle')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Member inserted into the database";
    } else {
        $msg = "Failed to add Member";
    }
}
mysqli_close($conn);
?>



<div class="col-lg-10">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">

</div>
</div>
</div>




<div class="row">
<div class="col-12">
<form method="POST" enctype="multipart/form-data">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Add New Team </h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="row">
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text" name="name" <?= htmlspecialchars($_POST['name'] ?? ''); ?> placeholder="name">
</div>
</div>
<div class="col-lg-6">
<select name="role" class="nice_Select2 nice_Select_line wide">
            <option value="1">Select Role</option>
            <option value="ceo">ceo</option>
            <option value="Senior worker">Senior worker</option>
            <option value="Junior worker">Junior worker</option>
        </select>
</div>
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="file" class="form-control" name="image"  <?= htmlspecialchars($_POST['image'] ?? ''); ?> placeholder="image">
</div>
</div>
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text" name="fb_handle" <?= htmlspecialchars($_POST['fb_handle'] ?? ''); ?> placeholder="fb_handle">
</div>
</div>
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text"<?= htmlspecialchars($_POST['ig_handle'] ?? ''); ?> placeholder="instagram handle">
</div>
</div>
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text" <?= htmlspecialchars($_POST['tw_handle'] ?? ''); ?> placeholder="twitter">
</div>
</div>
<div class="col-12">
<div class="create_report_btn mt_30">
<a href="" type="submit" name="submit" class="btn_1 radius_btn d-block text-center">Add to team</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>



<?php
include "footer.php";
?>