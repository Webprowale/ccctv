<?php
require "session_check.php";
include "config.php"; // Include this at the beginning to establish the database connection


// Execute the query to fetch blog data
$carry = mysqli_query($conn, "SELECT * FROM blog");

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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Blog list</h3>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center">
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">list</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 pt-4">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Blog List </h4>
                            </div>
                            <div class="QA_table mb_30">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">title</th>
                                            <th scope="col">description</th>
                                            <th scope="col">body</th>
                                            <th scope="col">image</th>
                                            <th scope="col">Date created</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($carry)){ ?>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"> <?php echo $row['id']; ?> </a></th>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php echo $row['body']; ?></td>
                                                <td><img style="max-width:90%; max-height:90%;"  src="../admin/image/<?= $row['image'] ?>" alt=""></td>
                                                <td><?php echo $row['create_at']; ?></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="blog_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                        <a href="delete.php?id=<?= $row['id']; ?>&table=blog" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
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
