<?php
include "config.php";
session_start();

$err_field = $succ = "";
$user = $password = "";

if (isset($_POST['submit'])) {
    $user = htmlspecialchars($_POST['user_id']);
    $password = htmlspecialchars($_POST['password']);
    
    if (empty($user) || empty($password)) {
        $_SESSION['error'] = "* All fields are required *";
    } else {
        // Query to check if the user exists in the database
        $query = "SELECT * FROM login WHERE username = '$user' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            // User exists, set session variable for logged in user
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user; // Optionally store username in session
            $_SESSION['success'] = "Login successful";
            echo "<script>alert('Login successful');</script>";
            header("Location: index.php");
            exit();
        } else {
            // User does not exist or incorrect credentials, set error message
            $_SESSION['error'] = "Invalid username or password";
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Neyo & Tee Tech || Admin Dashboard </title>
    <link rel="stylesheet" href="css/bootstrap1.min.css" />
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="bg-white">

    <div class="col-lg-12 bg-white">
        
            <div class="row justify-content-center p-5">
                <div class="col-lg-6">
                    <div class="modal-content cs_modal mt-5 shadow rounded">
                        <div class="modal-header bg-white justify-content-center flex-column">
                            <img src="../img/logos/logo.png" class="img-fluid">
                            <h5 class="modal-title fs-1 fw-bold text-black">Admin</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <div class>
                                    <input type="text" name="user_id" class="form-control" placeholder="Username" value="<?php echo htmlspecialchars($user); ?>">
                                </div>
                                <div class>
                                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo htmlspecialchars($password); ?>">
                                </div>
                                <button type="submit" name="submit" class="btn form-control text-center text-white fs-4 fw-semibold" style="background-color: #FF5F00;">Log in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>

</body>

</html>