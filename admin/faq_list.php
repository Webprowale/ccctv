<?php
require "session_check.php";
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
include "navbar.php"; 
?>

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30">FAQ list</h3>
                    </div>
                    <div class="page_title_right">
                        <div class="page_date_button d-flex align-items-center">
                            <ol class="breadcrumb page_bradcam mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">FAQ</li>
                            </ol>
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
                </div>

                <div class="accordion accordion_custom mb_50" id="accordion_ex">
                    <?php while ($row = mysqli_fetch_array($carry)) { 
                        $accordionId = 'accordion_' . $row['id'];
                        $headingId = 'heading_' . $row['id'];
                        $collapseId = 'collapse_' . $row['id'];
                    ?>
                        <div class="card">
                            <div class="row">
                                <div class="col-11">
                                    <div class="card-header" id="<?php echo $headingId; ?>">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="false" aria-controls="<?php echo $collapseId; ?>">
                                                <?php echo $row['heading']; ?> 
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="action_btns d-flex">
                                        <a href="faq_edit.php?id=<?php echo $row['id']; ?>" class="action_btn mr_10 edit_btn">
                                            <i class="far fa-edit"></i> 
                                        </a>
                                        <a href="delete.php?id=<?= $row['id']; ?>&table=faq" onclick="return confirm('Are you sure you want to delete this record?');" class="action_btn delete_btn">
                                            <i class="fas fa-trash"></i> 
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="<?php echo $collapseId; ?>" class="collapse" aria-labelledby="<?php echo $headingId; ?>" data-parent="#accordion_ex">
                                <div class="card-body">
                                    <p><?php echo $row['fullWord']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
