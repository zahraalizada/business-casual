<?php $page = "store"; ?>
<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>
<?php include "../settings/setting.php"; ?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Store Page</h1>
    </div>

    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h4 class="text-capitalize"> Table</h4>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th width="15%">Title</th>
        <th width="15%">Subtitle</th>
        <th>Street</th>
        <th>Address</th>
        <th width="15%">Phone</th>
        <th width="10%">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($getData as $key) { ?>
    <tr>
        <td><?= $key['title'] ?></td>
        <td><?= $key['subtitle'] ?></td>
        <td><?= $key['street'] ?></td>
        <td><?= $key['address'] ?></td>
        <td><?= $key['phone'] ?></td>
        <td>
            <div>
                <a href="update_store.php?update_store_id=<?= $key['id'] ;?>" class="btn btn-primary btn-circle btn-sm" title="Edit">
                    <i class="fas fa-edit"></i>
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