<?php
include("config.php");
include "header.php";
include "sidebar.php";
include "navbar.php";
?>

<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

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
    $role = $_POST['role'];
    $content = $_POST['content'];
    // Insert data into the database
    $sql = "UPDATE testimonials SET name='$name', role='$role', content='$content' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $msg = "Testimonials iUpdated";
    } else {
        $msg = "Failed Update Testimonials";
    }
}

$id = $_GET['id'];

// Fetch the record with the specified ID
$sql_fetch = "SELECT * FROM testimonials WHERE id='$id'";
$result_fetch = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result_fetch);


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
<input  type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" <?= htmlspecialchars($_POST['name'] ?? ''); ?> id="inputAddress" placeholder="name">
</div>
<div class="mb-3">
<input type="text" class="form-control" name="role" value="<?php echo $row['role']; ?>" <?= htmlspecialchars($_POST['role'] ?? ''); ?> id="inputAddress" placeholder="role">
</div>
<div class="mb-3">
<input type="text" class="form-control" name="content" value="<?php echo $row['content']; ?>" <?= htmlspecialchars($_POST['content'] ?? ''); ?> id="inputAddress" placeholder="content">
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