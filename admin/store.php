<?php require_once "layouts/admin_header.php"; ?>
<?php require_once "layouts/admin_sidebar.php"; ?>
<?php require_once "layouts/admin_navigation.php"; ?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Store Page Table</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end">
            <button class="btn btn-primary btn-md">Add</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Week</th>
                        <th>Hour</th>
                        <th>Street</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th width="150px">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Title 1</td>
                        <td>Subtitle 1</td>
                        <td>Week 1</td>
                        <td>Hour 1</td>
                        <td>Street 1</td>
                        <td>Address 1</td>
                        <td>Phone 1</td>
                        <td>
                            <div>
                                <a href="#" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-circle btn-sm" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<?php require_once "layouts/admin_footer.php"; ?>