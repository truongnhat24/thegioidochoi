<?php global $mediaFiles; ?>
<?php array_push($mediaFiles['css'], MediaURI . "admin/css/user.css"); ?>
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
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Users</h3>

            <div class="form-inline flex-grow-1 justify-content-center search-user">
                <div class="input-group">
                    <input class="form-control form-control-sidebar search-input" type="search" placeholder="Search" alt="search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar search-btn" alt="<?php echo vendor_app_util::url(
                                                                            array(
                                                                                'area' => 'admin',
                                                                                'ctl' => 'users',
                                                                                'act' => 'search',
                                                                            )
                                                                        ); ?>">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                    <div>
                        <button class="btn btn-sidebar filter-btn" alt="filter">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-tools">
                <a class="btn btn-info btn-sm" href="<?php echo vendor_app_util::url(
                                                            array(
                                                                'area' => 'admin',
                                                                'ctl' => 'users',
                                                                'act' => 'add',
                                                            )
                                                        ); ?>">
                    <i class="fas fa-plus">
                    </i>
                    Add user
                </a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
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
                    <?php foreach ($this->records['data'] as $user) : ?>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                <a>
                                    <?php echo $user['id']; ?>
                                </a>
                            </td>
                            <td>
                                <span><?php echo $user['name']; ?></span>
                                <br>
                                <small>
                                    Created <?php echo $user['created']; ?>
                                </small>
                            </td>
                            <td class="project_progress">
                                <span><?php echo $user['email']; ?></span>
                                <br>
                                <small>
                                    <?php echo $user['phone']; ?>
                                </small>
                            </td>
                            <td>
                                <img class="img-user-dash" src="<?php if (is_null($user['image'])) {
                                                                    echo MediaURI . 'upload/users/avatar_default.png';
                                                                } else {
                                                                    echo MediaURI . 'upload/users/' . $user['image'];
                                                                } ?>" alt="">
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success"><?php echo ($user['roles'] == '1') ? 'Admin' : 'User'; ?></span>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success"><?php echo ($user['status'] == '1') ? 'Enable' : 'Disable'; ?></span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="<?php echo vendor_app_util::url(
                                                                            array(
                                                                                'area' => 'admin',
                                                                                'ctl' => 'users',
                                                                                'act' => 'view/' . $user['id'],
                                                                            )
                                                                        ); ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="<?php echo vendor_app_util::url(
                                                                            array(
                                                                                'area' => 'admin',
                                                                                'ctl' => 'users',
                                                                                'act' => 'edit/' . $user['id'],
                                                                            )
                                                                        ); ?>">
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
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</section>

</div>

<?php global $mediaFiles; ?>
<?php array_push($mediaFiles['js'], MediaURI . "admin/js/search.js"); ?>

<?php include_once 'views/admin/layout/' . $this->layout . 'footer.php'; ?>