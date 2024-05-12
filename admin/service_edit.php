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
<h3 class="f_s_50 f_w_800 dark_text mr_30">Update Service</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Edit Service</li>
</ol>
</div>
</div>
</div>


<?php

$msg = "";
if (isset($_POST['submit'])) {
    $id = $_POST['id']; // Retrieve the ID of the record to be updated
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE servce SET title='$title', description='$description' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $msg = "Information updated in the database successfully!";
        
    } else {
        $msg = "Failed to update information in the database!";
    }
}

$id = $_GET['id'];

// Fetch the record with the specified ID
$sql_fetch = "SELECT * FROM servce WHERE id='$id'";
$result_fetch = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result_fetch);

mysqli_close($conn);
?>


<form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                <input  type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input required type="text" class="form-control" value="<?php echo $row['title']; ?>" name="title" <?= htmlspecialchars($_POST['title'] ?? ''); ?> id="inputAddress" placeholder="title">
                                </div>
                                <div class="mb-3">
                                    <input required type="text" class="form-control" value="<?php echo $row['description']; ?>" name="description" <?= htmlspecialchars($_POST['description'] ?? ''); ?> id="inputAddress" placeholder="description">
                                </div>
                                <div class="mb-3">
                                    <input  type="file" class="form-control" value="<?php echo $row['image']; ?>" name="image" <?= htmlspecialchars($_POST['image'] ?? ''); ?> id="inputAddress" placeholder="image">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Update Service</button>
                            </form>

<?php
include "footer.php";
?>