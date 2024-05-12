<?php
include "config.php";
include "header.php";
include "sidebar.php";
include "navbar.php";

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM testimonials WHERE id = $delete_id";
    mysqli_query($conn, $sql_delete);
    header("Location:testimonials_list.php");
    exit;
}

$carry = mysqli_query($conn, "SELECT * FROM testimonials");


// Close the database connection
mysqli_close($conn);
?>


   

<div class="row">
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
<th scope="col">name</th>
<th scope="col">role</th>
<th scope="col">content</th>
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
<td> <?php echo $row['role']; ?></td>
<td> <div class="card-profile"> <?php echo $row['content']; ?>  data-original-title title></div> </td>
<td><?php echo $row['created_at']; ?></td>
<td>
<div class="action_btns d-flex">
                            <a href="testimonial_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10 edit_btn"> <i class="far fa-edit"></i> </a>
                            <a href="testimonials_list.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="action_btn delete_btn" > <i class="fas fa-trash"></i> </a>
                        </div>
</td>
</tr>
<?php $num++; } ?>
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

<?php include "footer.php"; ?>