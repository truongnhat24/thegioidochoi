<?php global $mediaFiles; ?>
<?php array_push($mediaFiles['css'], MediaURI ."admin/css/user.css");?>
<?php include_once 'views/admin/layout/' . $this->layout . 'top.php'; ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo vendor_app_util::url(
                                        array(
                                            'area' => 'admin',
                                            'ctl' => 'dashboard'
                                        )
                                    ); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 2%">
                            <input type="checkbox">
                        </th>
                        <th style="width: 1%">
                            id
                        </th>
                        <th style="width: 15%">
                            Full name
                        </th>
                        <th style="width: 20%">
                            Email - Phone
                        </th>
                        <th style="width: 15%">
                            Avatar
                        </th>
                        <th style="width: 8%" class="text-center">
                            Role
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>
                            <a>
                                1
                            </a>
                        </td>
                        <td>
                            <span>ABC</span>
                            <br>
                            <small>
                                Created 01.01.2019
                            </small>                            
                        </td>
                        <td class="project_progress">    
                            <span>123@gmail.com</span>
                            <br>                    
                            <small>
                                0123456789
                            </small>
                        </td>
                        <td>
                            <img class="img-user-dash" src="<?php echo MediaURI; ?>upload/users/avatar_default.png" alt="">
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Admin</span>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Enable</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</section>

</div>

<?php include_once 'views/admin/layout/' . $this->layout . 'footer.php'; ?>