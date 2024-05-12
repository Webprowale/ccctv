<?php
include "config.php";
include "header.php";
include "sidebar.php";
include "navbar.php";
$carry = mysqli_query($conn, "SELECT * FROM team");


if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM faq WHERE id = $delete_id";
    mysqli_query($conn, $sql_delete);
    header("Location: team_list.php");
    exit;
}

mysqli_close($conn);
?>




<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-12">
<div class="dashboard_header mb_50">
<div class="row">
<div class="col-lg-6">
<div class="dashboard_header_title">
<h3> Team members</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-end">
<p><a href="index.php">home</a> <i class="fas fa-caret-right"></i> team</p>
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
<a href="team_list.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="action_btn"> <i class="fas fa-trash"></i> </a>
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