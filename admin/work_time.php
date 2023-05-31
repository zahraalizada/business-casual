<?php $page = "work_time"; ?>
<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>
<?php include "../settings/setting.php";?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Work Time Page</h1>
    </div>

    <div class="card shadow mb-4">

    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th width="5%">No</th>
        <th>Day</th>
        <th>Hour</th>
        <th width="10%">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($getData as $key) { ?>
    <tr>

        <td><?= $key['id'] ?></td>
        <td><?= $key['work_key'] ?></td>
        <td><?= $key['work_value'] ?></td>
        <td>
            <div>
                <a href="update_work_time.php?update_work_time_id=<?= $key['id'] ;?>" class="btn btn-primary btn-circle btn-sm" title="Edit">
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