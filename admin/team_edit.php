
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
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">Edit Team</h3>
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
if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}

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

    $img_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $img_new_name = time() . '_' . rand(100, 999) . '.' . $img_ext;

    // Upload the image
    $target_dir = "../admin/image/";
    $target_file = $target_dir . $img_new_name;
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){

    // Insert data into the database with the generated random number as image name
    $sql = "UPDATE team SET name='$name', position='$position', fb_handle='$fb_handle', ig_handle='$ig_handle', tw_handle='$tw_handle', image='$img_new_name' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        $msg = "Information updated successfully!";
        
    } else {
        $msg = "Failed to update information!";
    }
}
}

$id = $_GET['id'];

// Fetch the record with the specified ID
$sql_fetch = "SELECT * FROM team WHERE id='$id'";
$result_fetch = mysqli_query($conn, $sql_fetch);
$row = mysqli_fetch_assoc($result_fetch);

mysqli_close($conn);
?>


<div class="col-lg-10">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h4 class="text-center"><?= htmlspecialchars($msg); ?></h4>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">
<form method="POST" enctype="multipart/form-data">
<div class="mb-3">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" <?= htmlspecialchars($_POST['name'] ?? ''); ?> id="inputAddress" placeholder="Name">
</div>
<div class="mb-3">
<input type="text" class="form-control" name="position" value="<?php echo $row['position']; ?>" <?= htmlspecialchars($_POST['position'] ?? ''); ?> id="inputAddress" placeholder="position">
</div>
<div class="mb-3">
<input type="file" class="form-control" name="image" value="<?php echo $row['image']; ?>"  <?= htmlspecialchars($_POST['image'] ?? ''); ?> id="inputAddress" placeholder="image">
</div>
<div class="mb-3">
<input type="text" class="form-control" name="fb_handle" value="<?php echo $row['fb_handle']; ?>" <?= htmlspecialchars($_POST['fb_handle'] ?? ''); ?> id="inputAddress" placeholder="fb_handle">
</div>
<div class="mb-3">
<input type="text" class="form-control" name="ig_handle" value="<?php echo $row['ig_handle']; ?>" <?= htmlspecialchars($_POST['ig_handle'] ?? ''); ?> id="inputAddress" placeholder="ig_handle">
</div>
<div class="mb-3">
<input type="text" class="form-control" name="tw_handle" value="<?php echo $row['tw_handle']; ?>" <?= htmlspecialchars($_POST['tw_handle'] ?? ''); ?> id="inputAddress" placeholder="tw_handle">
</div>
<button type="submit" name="submit" class="btn border-0" style="background-color: #FF5F00;">Add to team</button>
</form>
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
