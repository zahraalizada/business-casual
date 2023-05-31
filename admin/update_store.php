<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>

<?php
$page = "store";
$id = $_GET['update_store_id'];
include "../settings/setting.php";
$data = $getData;

?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Store Page </h1>
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
                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $data['title'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subtitle" name="subtitle" value="<?= $data['subtitle'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subtitle" name="street" value="<?= $data['street'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subtitle" name="address" value="<?= $data['address'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subtitle" name="phone" value="<?= $data['phone'] ?>" required>
                    </div>


                    <button type="submit" class="btn btn-primary w-25" name="update-store-btn"> Update </button>
                </form>
            </div>
        </div>
    </div>



<?php require_once "layouts/admin_footer.php"; ?>