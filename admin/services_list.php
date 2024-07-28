
<?php
require "session_check.php";
include "config.php";
include "header.php";
include "sidebar.php";
include "navbar.php";
$carry = mysqli_query($conn, "SELECT * FROM servce");

?>

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Service list</h3>
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



<div class="row pt-5 mt-5">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30 pt-4">
<div class="white_card_body">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Service List </h4>
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
<th scope="col">Title</th>
<th scope="col">Description</th>
<th scope="col">image</th>
<th scope="col">Date created</th>
<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php while($row = mysqli_fetch_array($carry)){ ?>
<tr>
<th scope="row"> <a href="#" class="question_content"> <?= $row['id'] ?> </a></th>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td> <div class="card-profile"><img style="max-width:90%; max-height:90%;"  src="../admin/image/<?= $row['image'] ?>"  data-original-title title></div> </td>
<td><?php echo $row['create_at']; ?></td>
<td>
<div class="action_btns d-flex">
<a href="service_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="delete.php?id=<?= $row['id']; ?>&table=servce" class="action_btn"> <i class="fas fa-trash"></i> </a>
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
