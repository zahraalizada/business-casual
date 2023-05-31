<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>

<?php
$page = "work_time";
$id = $_GET['update_work_time_id'];
include "../settings/setting.php";
$data = $getData;

?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Work Time Page </h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 ">
            <h4 class="text-capitalize">Update content</h4>
        </div>
        <div class="card-body">
            <div class="col-lg-6">
                <form class="user" action="../settings/crud.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="hdn" value="<?= $data['id'] ?>">
                        <input type="text" class="form-control" placeholder="Title" name="work_key" value="<?= $data['work_key'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subtitle" name="work_value" value="<?= $data['work_value'] ?>">
                    </div>



                    <button type="submit" class="btn btn-primary w-25" name="update-work-time-btn"> Update </button>
                </form>
            </div>
        </div>
    </div>



<?php require_once "layouts/admin_footer.php"; ?>