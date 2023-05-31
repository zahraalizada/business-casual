<?php $page = "products"; ?>
<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>
<?php  include "../settings/setting.php"; ?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">products Page</h1>
    </div>

    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h4 class="text-capitalize"> Table</h4>
        <a href="new_products.php" class="btn btn-primary btn-md">Add</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th width="15%">Image</th>
        <th width="15%">Title</th>
        <th width="15%">Subtitle</th>
        <th>Content</th>
        <th width="10%">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($getData as $key) { ?>
    <tr>
        <td>
            <div class="admin-img-box">
                <img src="../img/<?= $key['image'];?>" alt="image" name="image">
            </div>
        </td>
        <td><?= $key['title'] ?></td>
        <td><?= $key['subtitle'] ?></td>
        <td><?= $key['content'] ?></td>
        <td>
            <div>
                <a href="update_products.php?update_products_id=<?= $key['id'] ;?>" class="btn btn-primary btn-circle btn-sm" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <a onclick="return confirm('Are you sure?');" href="../settings/crud.php?delete_products_id=<?= $key['id'] ?>" class="btn btn-danger btn-circle btn-sm" title="Delete">
                    <i class="fas fa-trash"></i>
                </a>
            </div>
        </td>
    </tr>
    <?php } ; ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>


    <?php require_once "layouts/admin_footer.php"; ?>