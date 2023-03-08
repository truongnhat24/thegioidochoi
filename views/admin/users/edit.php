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
                    <li class="breadcrumb-item"><a href="<?php echo vendor_app_util::url(
                                                                array(
                                                                    'area' => 'admin',
                                                                    'ctl' => 'users'
                                                                )
                                                            ); ?>">Users</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
        <div class="card-body">
            <div class="tab-pane" id="settings">
                <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="<?php echo vendor_app_util::url(
                                                                                                        array(
                                                                                                            'area' => 'admin',
                                                                                                            'ctl' => 'users',
                                                                                                            'act' => 'edit/' . $this->records['id'],
                                                                                                        )
                                                                                                    ); ?>">
                    <div class="form-group row">
                        <label for="nameProfile" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][name]" type="text" class="form-control" id="nameProfile" placeholder="Name" value="<?php echo $this->records['name']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailProfile" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][email]" type="email" class="form-control" id="emailProfile" placeholder="Email" value="<?php echo $this->records['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usernameProfile" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][username]" type="text" class="form-control" id="usernameProfile" placeholder="Username" value="<?php echo $this->records['username']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passwordProfile" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][password]" type="password" class="form-control" id="passwordProfile" placeholder="Password" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="roleProfile" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][roles]" type="number" class="form-control" id="roleProfile" placeholder="Role" value="<?php echo $this->records['roles']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="statusProfile" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][status]" type="number" class="form-control" id="statusProfile" placeholder="Status" value="<?php echo $this->records['status']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneProfile" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input name="data[<?php echo $this->controller; ?>][phone]" type="phone" class="form-control" id="phoneProfile" placeholder="Phone" value="<?php echo $this->records['phone']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="imageEdit" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10 image-upload">
                            <input name="image" type="file" class="form-control" id="imageEdit" placeholder="image">
                            <img src="<?php if (is_null($this->records['image'])) {
                                            echo MediaURI . 'img/avatar_default.png';
                                        } else {
                                            echo MediaURI . 'upload/users/' . $this->records['image'];
                                        } ?>" alt="avatar" class="img-thumbnail profile-image mt-2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button name="btn_submit" type="submit" class="btn btn-danger">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>
<?php global $mediaFiles; ?>
<?php array_push($mediaFiles['js'], MediaURI . "js/form.js"); ?>

<?php include_once 'views/admin/layout/' . $this->layout . 'footer.php'; ?>