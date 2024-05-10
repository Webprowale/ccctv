<?php
include "config.php";
include "header.php";
include "sidebar.php";
include "navbar.php";
$carry = mysqli_query($conn, "SELECT * FROM team");

$sql_count = "SELECT COUNT(id) AS id_count FROM team"; // Replace 'faq' with your table name
$result_count = mysqli_query($conn, $sql_count);
$id_count = 0;
if ($result_count) {
    $row_count = mysqli_fetch_assoc($result_count);
    $id_count = $row_count['id_count'];
} else {
    echo "Failed to execute query: " . mysqli_error($conn);
}

mysqli_close($conn);
?>




<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left d-flex align-items-center">
<h3 class="f_s_25 f_w_700 dark_text mr_30">Team Members</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active">members</li>
</ol>
</div>
</div>
<div class="page_title_right">
<div class="page_date_button d-flex align-items-center">
<img src="img/icon/calender_icon.svg" alt>
August 1, 2020 - August 31, 2020
</div>
</div>
</div>
</div>

 
<div class="col-xl-4 ps-lg-5">
        <div class="white_card card_height_100 mb_30 user_crm_wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_crm">
                        <div class="crm_head d-flex align-items-center justify-content-between">
                            <div class="thumb">
                                <img src="img/crm/businessman.svg" alt>
                            </div>
                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                        </div>
                        <div class="crm_body">
                            <h4><?php echo $id_count; ?></h4>
                            <p>Team</p>
                        </div>
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
<h4>Member List </h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<div class="add_button ms-2">
<a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">search</a>
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
<?php while($row = mysqli_fetch_array($carry)){ ?>
<tr>
<th scope="row"> <a href="#" class="question_content"> <?= $row['id'] ?> </a></th>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['position']; ?></td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f58405d441b1f166f48424e4643014c4042"><?php echo $row['fb_handle']; ?></a></td>
<td><a href="#"><?php echo $row['ig_handle']; ?></a></td>
<td><a href="#" class="status_btn"><?php echo $row['tw_handle']; ?></a></td>
<td> <div class="card-profile"><img class="rounded-circle" src="<?php echo $row['image']; ?>"  data-original-title title></div> </td>
<td><?php echo $row['created_at']; ?></td>
<td>
<div class="action_btns d-flex">
<a href="team_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
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

