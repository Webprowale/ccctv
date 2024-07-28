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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Add Team</h3>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center">
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">team</li>
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
                        $name = $_POST['name'];
                        $position = $_POST['position'];
                        $fb_handle = $_POST['fb_handle'];
                        $ig_handle = $_POST['ig_handle'];
                        $tw_handle = $_POST['tw_handle'];

                        // Generate a random number for the image file name
                        $random_number = rand(1000, 9999);
                        $image_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $image_new_name = $random_number . '.' . $image_extension;

                        $target_dir = "../admin/image/";
                        $target_file = $target_dir . $image_new_name;

                        // Move the uploaded image to the target directory
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                           
                            // Insert data into the database
                            $sql = "INSERT INTO team (name, position, image, fb_handle, ig_handle, tw_handle) VALUES ('$name', '$position', '$image_new_name', '$fb_handle', '$ig_handle', '$tw_handle')";

                            if (mysqli_query($conn, $sql)) {
                                $msg .= " Member inserted into the database";
                            } else {
                                $msg .= " Failed to add Member to the database";
                            }
                        } else {
                            $msg = "Failed to upload file!";
                        }
                    }
                    ?>
                       <div class="row">
            <div class="col-12">
              <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                  <div class="box_header m-0">
                    <div class="main-title">
                      <h3 class="m-3">Add New Team</h3>
                    </div>
                  </div>
                </div>
                <div class="white_card_body">
                <h3 class="text-center text-success"> <?= htmlspecialchars($msg); ?></h3>
                <form method="POST" enctype="multipart/form-data">
                                            <div class="white_card_body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="name" placeholder="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="position" placeholder="position">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="common_input mb_15">
                                                            <input type="file" class="form-control" name="image" placeholder="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="fb_handle" placeholder="Facebook URL">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="ig_handle" placeholder="Instagram URL">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="tw_handle" placeholder="Twitter URL">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="create_report_btn mt_30">
                                                            <button type="submit" name="submit" class="btn_1 btn d-block text-center border-0" style="background-color: #FF5F00;">Add to team</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
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
