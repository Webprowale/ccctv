<?php
include "config.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
$sql_count = "SELECT COUNT(id) AS id_count FROM faq"; 
$result_count = mysqli_query($conn, $sql_count);
$id_count = 0;
if ($result_count) {
    $row_count = mysqli_fetch_assoc($result_count);
    $id_count = $row_count['id_count'];
} else {
    echo "Failed to execute query: " . mysqli_error($conn);
}

$sql_count = "SELECT COUNT(id) AS id_count FROM blog"; 
$result_count = mysqli_query($conn, $sql_count);
$id_countt = 0;
if ($result_count) {
    $row_count = mysqli_fetch_assoc($result_count);
    $id_countt = $row_count['id_count'];
} else {
    echo "Failed to execute query: " . mysqli_error($conn);
}

$sql_count = "SELECT COUNT(id) AS id_count FROM faq"; 
$result_count = mysqli_query($conn, $sql_count);
$id_counttt = 0;
if ($result_count) {
    $row_count = mysqli_fetch_assoc($result_count);
    $id_countt = $row_count['id_count'];
} else {
    echo "Failed to execute query: " . mysqli_error($conn);
}

$sql_count = "SELECT COUNT(id) AS id_count FROM project"; // Replace 'faq' with your table name
$result_count = mysqli_query($conn, $sql_count);
$id_counttttt = 0;
if ($result_count) {
    $row_count = mysqli_fetch_assoc($result_count);
    $id_count = $row_count['id_count'];
} else {
    echo "Failed to execute query: " . mysqli_error($conn);
}


?>



<?php
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
<h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
<li class="breadcrumb-item active">Analytic</li>
</ol>
</div>

</div>
</div>
<div class="col-xl-12 ">
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
<h4><?php echo $id_countt; ?></h4>
<p>Team</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm ">
<div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/customer.svg" alt>
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
<h4><?php echo $id_count; ?></h4>
<p>blog</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/infographic.svg" alt>
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
<h4><?php echo $id_counttt; ?></h4>
<p>FAQ</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/sqr.svg" alt>
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
<h4><?php echo $id_counttttt; ?></h4>
<p>project</p>
</div>
</div>
</div>
</div>

<?php
include "footer.php"
?>