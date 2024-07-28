<?php
require "session_check.php";
include "config.php";
include "header.php";
include "sidebar.php";
include "navbar.php";
$carry = mysqli_query($conn, "SELECT * FROM team");
mysqli_close($conn);
?>

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Team List</h3>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30 pt-4">
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Project List </h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Facebook link</th>
                                            <th scope="col">Instagram link</th>
                                            <th scope="col">twitter link</th>
                                            <th scope="col">image</th>
                                            <th scope="col">Date created</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $num = 1; ?>
                                        <?php while ($row = mysqli_fetch_array($carry)) { ?>
                                            <tr>
                                                <th scope="row"> <a href="#" class="question_content"><?php echo $num . "."; ?> </a></th>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['position']; ?></td>
                                                <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f58405d441b1f166f48424e4643014c4042"><?php echo $row['fb_handle']; ?></a></td>
                                                <td><a href="#"><?php echo $row['ig_handle']; ?></a></td>
                                                <td><a href="#" class="status_btn"><?php echo $row['tw_handle']; ?></a></td>
                                                <td><img class="rounded-circle" width="40" height="40" src="../admin/image/<?= $row['image'] ?>"> </td>
                                                <td><?php echo $row['created_at']; ?></td>
                                                <td>
                                                    <div class="action_btns d-flex">
                                                        <a href="team_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10 edit_btn"> <i class="far fa-edit"></i> </a>
                                                        <a href="delete.php?id=<?= $row['id']; ?>&table=team" onclick="return confirm('Are you sure you want to delete this record?');" class="action_btn delete_btn"> <i class="fas fa-trash"></i> </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $num++;
                                        } ?>
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