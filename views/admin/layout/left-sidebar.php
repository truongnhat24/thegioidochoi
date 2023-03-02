<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="?=vendor_app_util::url(array('ctl'=>'dashboard')); ?>" class="brand-link">
    <img src="<?php echo MediaURI; ?>admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo user_model::getAvataUrl();?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo user_model::getFullnameLogined();?></a>
      </div>
    </div>
  
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item <?php echo ($app['ctl']=='dashboard')? 'active menu-open':'';?>">
			    <a class="nav-link <?php echo ($app['ctl']=='dashboard')? 'active':'';?>" href="<?=vendor_app_util::url(array('ctl'=>'dashboard')); ?>">
			      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
			    </a>
			  </li>
			  <li class="nav-item has-treeview <?=($app['ctl']=='users')? 'active menu-open':'';?>">
			    <a href="#" class="nav-link <?php echo ($app['ctl']=='users')? 'active':'';?>">
			      <i class="fa fa-user"></i> <span>Users</span>
			      <span class="pull-right-container">
			        <i class="fa fa-angle-left pull-right"></i>
			      </span>
			    </a>
          <ul class="nav nav-treeview">
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='users' && $app['act']=='index')? 'active':'';?>" href="<?=vendor_app_util::url(array('ctl'=>'users')); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-users"></i> List Users</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='users' && $app['act']=='add')? 'active"':'';?>" href="<?=vendor_app_util::url(array('ctl'=>'users', 'act'=>'add')); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Add User</a>
			      </li>
			    </ul>
			  </li>

			  <li class="nav-item has-treeview <?=($app['ctl']=='books')? 'active menu-open':'';?>">
			    <a href="#" class="nav-link <?php echo ($app['ctl']=='books')? 'active':'';?>">
			      <i class="fa fa-book"></i> <span>Books</span>
			      <span class="pull-right-container">
			        <i class="fa fa-angle-left pull-right"></i>
			      </span>
			    </a>
          <ul class="nav nav-treeview">
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='books' && $app['act']=='index')? 'class="active"':'';?>" href="<?=vendor_app_util::url(['ctl'=>'books']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i> List Books</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo($app['ctl']=='books' && $app['act']=='add')? 'active':'';?>" href="<?=vendor_app_util::url(['ctl'=>'books', 'act'=>'add']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle"></i> Add Book</a>
			      </li>
			    </ul>
			  </li>

			  <li class="nav-item has-treeview <?=($app['ctl']=='projects')? 'active menu-open':'';?>">
			    <a href="#" class="nav-link <?php echo ($app['ctl']=='projects')? 'active':'';?>">
			      <i class="fa fa-book"></i> <span>Projects</span>
			      <span class="pull-right-container">
			        <i class="fa fa-angle-left pull-right"></i>
			      </span>
			    </a>
	            <ul class="nav nav-treeview">
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='projects' && $app['act']=='index')? 'class="active"':'';?>" href="<?=vendor_app_util::url(['ctl'=>'projects']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i> List Projects</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='projects' && $app['act']=='suggested')? 'active':'';?>" href="<?=vendor_app_util::url(['ctl'=>'projects', 'act'=>'suggested']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i> Suggested Projects</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo($app['ctl']=='projects' && $app['act']=='add')? 'active':'';?>" href="<?=vendor_app_util::url(['ctl'=>'projects', 'act'=>'add']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle"></i> Add Project</a>
			      </li>
			    </ul>
			  </li>
			  
			  <li class="nav-item has-treeview <?=($app['ctl']=='static_pages')? 'active menu-open':'';?>">
			    <a href="javascript:void(0);" class="nav-link <?php echo ($app['ctl']=='static_pages')? 'active':'';?>">
			      <i class="fa fa-book"></i> <span>Static pages</span>
			      <span class="pull-right-container">
			        <i class="fa fa-angle-left pull-right"></i>
			      </span>
			    </a>
	        <ul class="nav nav-treeview">
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='static_pages' && $app['act']=='index')? 'active"':'';?>" href="<?=vendor_app_util::url(['ctl'=>'static_pages']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i> List Static Pages</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='static_pages' && $app['act']=='all')? 'active':'';?>" href="<?=vendor_app_util::url(['ctl'=>'static_pages', 'act'=>'all']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-list"></i> Toggle Static Pages</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='static_pages' && $app['act']=='add')? 'active':'';?>" href="<?=vendor_app_util::url(['ctl'=>'static_pages', 'act'=>'add']); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle"></i> Add Static Page</a>
		      	</li>
			    </ul>
			  </li>
			  
			  <li class="nav-item has-treeview <?=($app['ctl']=='users' && $app['act']=='profile')? 'active menu-open':'';?>">
			    <a href="#" class="nav-link <?php echo ($app['ctl']=='users')? 'active':'';?>">
			      <i class="fa fa-lock"></i>
			      <span>Account management</span>
			      <span class="pull-right-container">
			        <i class="fa fa-angle-left pull-right"></i>
			      </span>
			    </a>
          <ul class="nav nav-treeview">
			      <li class='nav-item'>
			      	<a class="nav-link <?php echo ($app['ctl']=='users' && $app['act']=='profile')? 'active':'';?>" href="<?=vendor_app_util::url(array('ctl'=>'users', 'act'=>'profile')); ?>">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-male"></i>&nbsp; Profile</a>
			      </li>
			      <li class='nav-item'>
			      	<a class="nav-link" href="#" data-target="#changePassword" data-toggle="modal">
			      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-key"></i>&nbsp; Change Password</a>
			      </li>
			    </ul>
			  </li>
        <li class='nav-item'>
			    <a class="nav-link" href="<?=vendor_app_util::url(array('ctl'=>'login', 'act'=>'logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
			  </li>
			</ul>
		</nav>
  </div>
  <!-- /.sidebar -->
</aside>