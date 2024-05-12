
<?php
include("config.php");
include "header.php";
include "sidebar.php";
include "navbar.php";
?>

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left d-flex align-items-center">
<h3 class="f_s_25 f_w_700 dark_text mr_30">Create Testimonial </h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Testimonial</li>
</ol>
</div>
</div>
</div>
</div>


<?php
// Establish database connection

// Initialize message variable
$msg = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $selected_value = $_POST['role'];
    $content = $_POST['content'];



    // Insert data into the database with the generated random number as image name
    $sql = "INSERT INTO testimonials (name,role,content) VALUES ('$name','$selected_value','$content')";

    if (mysqli_query($conn, $sql)) {
        $msg = "Testimonial added";
    } else {
        $msg = "Failed to add Testimonial";
    }
}
mysqli_close($conn);
?>






<div class="row">
<div class="col-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Add New Testimonial </h3>
</div>
</div>
</div>
<form method="POST" enctype="multipart/form-data">
<div class="white_card_body">
<div class="row">
<div class="col-lg-12">
<div class="common_input mb_15">
<input type="text" name="name" <?= htmlspecialchars($_POST['name'] ?? ''); ?> placeholder="name">
</div>
</div>

<div class="col-lg-12">
<div class="common_input mb_15">
<input type="text" name="content" <?= htmlspecialchars($_POST['content'] ?? ''); ?> placeholder="content">
</div>
</div>

<div class="col-lg-12">
<select name="role" class="nice_Select2 nice_Select_line wide">
            <option value="1">Select Role</option>
            <option value="CCTV Installation">CCTV Installation</option>
            <option value="Solar Installation">Solar Installation</option>
        </select>
</div>
<div class="col-12">
<div class="create_report_btn mt_30">
<button type="submit" name="submit" class="btn_1 radius_btn d-block text-center">Add Testimonial</button>
</div>
</div>
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
