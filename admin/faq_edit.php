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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit FAQ</h3>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center">
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">FAQ</li>
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
    $heading = $_POST['heading'];
    $fullWord = $_POST['fullWord'];

    $sql = "UPDATE faq SET heading='$heading', fullWord='$fullWord' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $msg = "Information updated in the database successfully!";
        
    } else {
        $msg = "Failed to update information in the database!";
    }
}

$id = $_GET['id'];

// Fetch the record with the specified ID
$sql_fetch = "SELECT * FROM faq WHERE id='$id'";
$result_fetch = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result_fetch);

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
                        <div class="modal-header justify-content-center" style="background-color: #FF5F00;">
                            <h5 class="modal-title text_white fw-bold">Update FAQ</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class>
                                <input  type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input  type="text" name="heading" class="form-control" value="<?php echo $row['heading']; ?>"  placeholder="Heading" required>
                                </div>
                                <div class>
                                    <textarea id="comment" name="fullWord" class="form-control" ><?php echo $row['fullWord']; ?></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn_1 btn  col-4 text-center" style="background-color: #FF5F00;">Update FAQ</button>
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