
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect the user to the login page
    header("location: login.php");
    exit;
}
include "header.php";
include "sidebar.php";
include "navbar.php";
include("config.php");

// Initialize message variable
$msg = "";


if (isset($_POST['submit'])) {
    $image_1 = $_FILES['image_1']['name'];
    $image_2 = $_FILES['image_2']['name'];
    $image_3 = $_FILES['image_3']['name'];
    $image_4 = $_FILES['image_4']['name'];
    $image_5 = $_FILES['image_5']['name'];
    $image_6 = $_FILES['image_6']['name'];
    $image_7 = $_FILES['image_7']['name'];

    $image_tmp_1 = $_FILES['image_1']['tmp_name'];
    $image_tmp_2 = $_FILES['image_2']['tmp_name'];
    $image_tmp_3 = $_FILES['image_3']['tmp_name'];
    $image_tmp_4 = $_FILES['image_4']['tmp_name'];
    $image_tmp_5 = $_FILES['image_5']['tmp_name'];
    $image_tmp_6 = $_FILES['image_6']['tmp_name'];
    $image_tmp_7 = $_FILES['image_7']['tmp_name'];
$folder = "./image/";
$img_ext_1 =  strtolower(pathinfo($image_1,PATHINFO_EXTENSION));
$img_ext_2 =  strtolower(pathinfo($image_2,PATHINFO_EXTENSION));
$img_ext_3 =  strtolower(pathinfo($image_3,PATHINFO_EXTENSION));
$img_ext_4 =  strtolower(pathinfo($image_4,PATHINFO_EXTENSION));
$img_ext_5 =  strtolower(pathinfo($image_5,PATHINFO_EXTENSION));
$img_ext_6 =  strtolower(pathinfo($image_6,PATHINFO_EXTENSION));
$img_ext_7 =  strtolower(pathinfo($image_7,PATHINFO_EXTENSION));

$img_set_1 ='favicon_1'. time().'_'. rand(1000, 9999). '.'. $img_ext_1;
$img_set_2 ='favicon_2'. time().'_'. rand(1000, 9999). '.'. $img_ext_2;
$img_set_3 ='favicon_3'. time().'_'. rand(1000, 9999). '.'. $img_ext_3;
$img_set_4 ='favicon_4'. time().'_'. rand(1000, 9999). '.'. $img_ext_4;
$img_set_5 ='favicon_5'. time().'_'. rand(1000, 9999). '.'. $img_ext_5;
$img_set_6 ='favicon_6'. time().'_'. rand(1000, 9999). '.'. $img_ext_6;
$img_set_7 ='favicon_7'. time().'_'. rand(1000, 9999). '.'. $img_ext_7;

move_uploaded_file($image_tmp_1, $folder.$img_set_1); 
move_uploaded_file($image_tmp_2, $folder.$img_set_2); 
move_uploaded_file($image_tmp_3, $folder.$img_set_3); 
move_uploaded_file($image_tmp_4, $folder.$img_set_4); 
move_uploaded_file($image_tmp_5, $folder.$img_set_5); 
move_uploaded_file($image_tmp_6, $folder.$img_set_6); 
move_uploaded_file($image_tmp_7, $folder.$img_set_7); 

$sql = "INSERT INTO favicon (image_1, image_2, image_3, image_4,image_5, image_6, image_7) VALUES('$image_set_1', '$image_set_2', '$image_set_3', '$image_set_4', '$image_set_5', '$image_set_6','$image_set_7')" ;
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Record inserted successfully');</script>";

}else{
echo "<script>alert('Record can not be inserted');</script>";
}
mysqli_close($conn);
}
?>

<form method="POST" enctype="multipart/form-data">
    <div class="white_card_body">
    <div class="form-group">
    <label for="image_1">Image 1</label>
    <input type="file" class="form-control" name="image_1" id="image_1">
</div>
<div class="form-group">
    <label for="image_2">Image 2</label>
    <input type="file" class="form-control" name="image_2" id="image_2">
</div>
<div class="form-group">
    <label for="image_3">Image 3</label>
    <input type="file" class="form-control" name="image_3" id="image_3">
</div>
<div class="form-group">
    <label for="image_4">Image 4</label>
    <input type="file" class="form-control" name="image_4" id="image_4">
</div>
<div class="form-group">
    <label for="image_5">Image 5</label>
    <input type="file" class="form-control" name="image_5" id="image_5">
</div>
<div class="form-group">
    <label for="image_6">Image 6</label>
    <input type="file" class="form-control" name="image_6" id="image_6">
</div>
<div class="form-group">
    <label for="image_7">Image 7</label>
    <input type="file" class="form-control" name="image_7" id="image_7">
</div>


</div>
<div class="white_card_body">
<button type="submit" name="submit" class="btn btn-primary mt-5">Add Logo</button>
</div>
</form>

<?php
include("footer.php");
?>