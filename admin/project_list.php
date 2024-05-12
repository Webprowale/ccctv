
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("location: login.php");
    exit;
}
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

// Check if the user is not logged in


// Fetch data from the database
$carry = mysqli_query($conn, "SELECT * FROM project ORDER BY id DESC");



// Close the database connection
mysqli_close($conn);
?>


    
 

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
<th scope="col">name</th>
<th scope="col">category</th>
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
<td><?php echo $row['project_name']; ?></td>
<td> <?php echo $row['category']; ?></td>
<td> <img style="max-width:70%; max-height:70%;"  src="../admin/image/<?= $row['image'] ?>"> </td>
<td><?php echo $row['created_at']; ?></td>
<td>
<div class="action_btns d-flex">
                            <a href="project_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10 edit_btn"> <i class="far fa-edit"></i> </a>
                            <a href="project_list.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="action_btn delete_btn" > <i class="fas fa-trash"></i> </a>
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
