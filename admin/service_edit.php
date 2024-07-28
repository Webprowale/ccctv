<?php
require "session_check.php";
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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit Service</h3>
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


<?php

$msg = "";
if (isset($_POST['submit'])) {
    $id = $_POST['id']; // Retrieve the ID of the record to be updated
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $img_new_name = time() . '_' . rand(100, 999) . '.' . $img_ext;

    // Upload the image
    $target_dir = "../admin/image/";
    $target_file = $target_dir . $img_new_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){

    $sql = "UPDATE servce SET title='$title', description='$description', image='$img_new_name' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $msg = "Information updated in the database successfully!";
        
    } else {
        $msg = "Failed to update information in the database!";
    }
}
}

$id = $_GET['id'];

// Fetch the record with the specified ID
$sql_fetch = "SELECT * FROM servce WHERE id='$id'";
$result_fetch = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result_fetch);

mysqli_close($conn);
?>


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
                                <input  type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="text" class="form-control" value="<?php echo $row['title']; ?>" name="title" <?= htmlspecialchars($_POST['title'] ?? ''); ?> placeholder="Title" required>
                                </div>
                                <div>
                                    <input type="text" class="form-control" value="<?php echo $row['description']; ?>" name="description" <?= htmlspecialchars($_POST['description'] ?? ''); ?> placeholder="Description" required>
                                </div>
                                <div>
                                    <input type="file" class="form-control" value="<?php echo $row['image']; ?>" name="image" <?= htmlspecialchars($_POST['image'] ?? ''); ?> placeholder="Image" required>
                                </div>
                                <button type="submit" name="submit" class="btn_1 btn col-4 text-center border-0"style="background-color: #FF5F00;">Update Service</button>
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