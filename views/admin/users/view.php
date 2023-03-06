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
        <div class="card-body">
            <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label for="nameProfile" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nameProfile" placeholder="Name" value="<?php echo $this->records['name']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailProfile" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailProfile" placeholder="Email" value="<?php echo $this->records['email']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usernameProfile" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="usernameProfile" placeholder="Name" value="<?php echo $this->records['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="roleProfile" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="roleProfile" placeholder="Name" value="<?php echo $this->records['roles']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="statusProfile" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="statusProfile" placeholder="Name" value="<?php echo $this->records['status']; ?>" readonly>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="phoneProfile" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="phoneProfile" placeholder="Name" value="<?php echo $this->records['phone']; ?>" readonly>
                        </div>
                    </div>                
                    
                    
                    
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</div>

<?php include_once 'views/admin/layout/' . $this->layout . 'footer.php'; ?>