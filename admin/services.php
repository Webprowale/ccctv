<?php
require "session_check.php";
include("config.php");
include "header.php";
include "sidebar.php";
include "navbar.php";



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
            $msg = "Service added successfully";
        } else {
            $msg = "Failed to add Service: " . mysqli_error($conn);
        }
    } else {
        $msg = "Error uploading image.";
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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Service</h3>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center">
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<body class="crm_body_bg">
    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <?php if(!empty($msg)): ?>
                        <div class="text-success fw-bold"><?= htmlspecialchars($msg); ?></div>
                    <?php endif; ?>
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center" style="background-color: #FF5F00;">
                            <h5 class="modal-title text_white fw-bold">Create new Service</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div>
                                    <input type="text" class="form-control" name="title" placeholder="Title" required>
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="description" placeholder="Description" required>
                                </div>
                                <div>
                                    <input type="file" class="form-control" name="image" placeholder="Image" required>
                                </div>
                                <button type="submit" name="submit" class="btn_1 col-4 btn border-0 text-center" style="background-color: #FF5F00;">Create Service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
