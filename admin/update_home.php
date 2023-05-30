<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>

<?php
$page = "home";
$id = $_GET['update_home_id'];
include "../settings/setting.php";
$data = $getData;

?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Home Page </h1>
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
                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $data['title'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subtitle" name="subtitle" value="<?= $data['subtitle'] ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="summernote" name="content"><?= $data['content'] ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="file" class="sr-only">File</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image"
                                   onchange="document.querySelector('.custom-file-label').textContent = this.files.length ? this.files[0].name : 'Select a image';" >
                            <label class="custom-file-label" for="inputGroupFile01"><?= $data['image']; ?></label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-25" name="update-home-btn"> Update </button>
                </form>
            </div>
        </div>
    </div>



<?php require_once "layouts/admin_footer.php"; ?>