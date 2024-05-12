<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("location: login.php");
    exit;
}

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
<h3 class="f_s_25 f_w_700 dark_text mr_30">Projects </h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">Projects</li>
</ol>
</div>

<?php
// Establish database connection

// Initialize message variable
$msg = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $project_name = $_POST['project_name'];
    $category = $_POST['category'];
    $img_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $img_new_name = time() . '_' . rand(100, 999) . '.' . $img_ext;

    // Upload the image
    $target_dir = "../admin/image/";
    $target_file = $target_dir . $img_new_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
        // Insert data into the database
        $sql = "INSERT INTO project (project_name, category, image) VALUES ('$project_name', '$category','$img_new_name')";
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




<body class="crm_body_bg">

    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    
                    <div class="text-success fw-bold">
                    <?= htmlspecialchars($msg); ?>
                    </div>

                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Create project</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class>
                                    <input  type="text" class="form-control"name="Project_name" <?= htmlspecialchars($_POST['Project_name'] ?? ''); ?> id="inputAddress" placeholder="Project name" required>
                                </div>
                                <div class>
                                    <input  type="text" class="form-control"name="Category" <?= htmlspecialchars($_POST['Category'] ?? ''); ?> placeholder="Category" required>
                                </div>
                                <div class>
                                    <input  type="file" class="form-control"name="image" <?= htmlspecialchars($_POST['image'] ?? ''); ?> id="inputAddress" placeholder="image" required>
                                </div>
                                <button type="submit" name="submit" class="btn_1 col-4 text-center">Add project</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include "footer.php";
?>