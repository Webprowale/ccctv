<?php
include "config.php"; // Include your database configuration file

// Sanitize input
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$table = isset($_GET['table']) ? mysqli_real_escape_string($conn, $_GET['table']) : '';

function deleteRecord($conn, $id, $table) {
    $sql = "DELETE FROM $table WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    if (mysqli_stmt_execute($stmt)) {
        return true; 
    } else {
        return false; 
    }
}

if (!empty($table) && deleteRecord($conn, $id, $table)) {
  echo "<script>alert('Deleted Successfully!');window.location.href = '../admin'; </script>";
} else {
  echo "<script>alert('Delete Failed!');window.location.href = '../admin'; </script>";
}
?>
