<?php include_once 'views/admin/layout/'.$this->layout.'top.php'; ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard<small> Control panel</small></h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">

	  <div class="row">
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-info">
		    <div class="inner">
		      <h3><?php echo $this->noUsers; ?></h3>
		      <p>Users management</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-bag"></i>
		    </div>
		    <a href="<?=vendor_app_util::url(array('ctl'=>'users')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-green">
		    <div class="inner">
		      <h3><?php echo $this->noBooks; ?></h3>
		      <p>Books management</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-stats-bars"></i>
		    </div>
		    <a href="<?=vendor_app_util::url(array('ctl'=>'books')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-yellow">
		    <div class="inner">
		      <h3><?php echo $this->noProjects;?></h3>
		      <p>Projects management</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-person-add"></i>
		    </div>
		    <a href="<?=vendor_app_util::url(array('ctl'=>'projects')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
		  <div class="small-box bg-red">
		    <div class="inner">
		      <h3><?php echo $this->noStps;?></h3>
		      <p>Static pages managment</p>
		    </div>
		    <div class="icon">
		      <i class="ion ion-pie-graph"></i>
		    </div>
		    <a href="<?=vendor_app_util::url(array('ctl'=>'static_pages')); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  </div>
		</div>
		<!-- ./col -->
	  </div>
	  <!-- /.row -->
	</div>
</div>

<?php include_once 'views/admin/layout/'.$this->layout.'footer.php'; ?>
