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


// Check if the user is not logged in


if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql_delete = "DELETE FROM faq WHERE id = $delete_id";
    mysqli_query($conn, $sql_delete);
    header("Location: faq_list.php");
    exit;
}

// Fetch data from the database
$carry = mysqli_query($conn, "SELECT * FROM faq ORDER BY id DESC");



// Close the database connection
mysqli_close($conn);
 include "navbar.php"; ?>
  
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
<h3 class="f_s_50 f_w_800 dark_text mr_30">FAQ list</h3>
</div>
</div>
<div class="col-lg-6">
<div class="dashboard_breadcam text-end">
<p><a href="index.php">home</a> <i class="fas fa-caret-right"></i> FAQ list</p>
</div>
</div>
</div>
</div>
</div>
  
 
<div class="row-12 ">

<div class="white_box mb_30">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Faq</h3>
</div>
<?php while ($row = mysqli_fetch_array($carry)) { ?>
</div>

<div class="accordion accordion_custom mb_50" id="accordion_ex">
<div class="card">

    <div class="row">
        <div class="col-9">
            <div class="card-header" id="headingOne">
<script>
    for{}
</script>


<h2 class="mb-0">
            <a href="#" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<?php echo $row['heading']; ?> </a>
</h2>
</div>
        </div>
        <div class="col-3">
        <div class="action_btns d-flex">
                            <a href="faq_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10 edit_btn"> <i class="far fa-edit"></i> </a>
                            <a href="faq_list.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="action_btn delete_btn" > <i class="fas fa-trash"></i> </a>
                        </div>
        </div>
    </div>


<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_ex">
<div class="card-body">
<p><?php echo $row['fullWord']; ?></p>
</div>
</div>
<?php } ?>
</div>
</div>
</div>

<?php include "footer.php"; ?>