<?php
require "session_check.php";
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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Create FAQ</h3>
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
// Establish database connection
include("config.php");

// Initialize message variable
$msg = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $heading = $_POST['heading'];
    $fullWord = $_POST['fullWord'];

    // Insert data into the database
    $sql = "INSERT INTO faq (heading, fullWord) VALUES ('$heading','$fullWord')";

    if (mysqli_query($conn, $sql)) {
        $msg = "FAQ inserted into the database";
    } else {
        $msg = "Failed to add FAQ";
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
                        <div class="modal-header justify-content-center" style="background-color: #FF5F00;">
                            <h5 class="modal-title text_white fw-bold">Create FAQ</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class>
                                    <input  type="text" name="heading" class="form-control" <?= htmlspecialchars($_POST['heading'] ?? ''); ?> placeholder="Heading" required>
                                </div>
                                <div class>
                                    <textarea id="comment" name="fullWord" class="form-control"  <?= htmlspecialchars($_POST['fullWord'] ?? ''); ?> placeholder="Full answer"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn_1 btn col-4 text-center border-0" style="background-color: #FF5F00;">Create FAQ</button>
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