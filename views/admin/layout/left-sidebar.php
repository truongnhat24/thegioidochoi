<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<a href="index3.html" class="brand-link">
		<span class="brand-text font-weight-light">The gioi do choi | Admin</span>
	</a>

	<div class="sidebar">

		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php if (is_null($_SESSION['auth']['image'])) {
								echo MediaURI . 'upload/users/avatar_default.png';
							} else {
								echo MediaURI . 'upload/users/' . $_SESSION['auth']['image'];
							} ?>" class="img-circle elevation-2" alt="">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?php echo $_SESSION['auth']['name']; ?></a>
			</div>
		</div>

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo vendor_app_util::url(
											array(
												'area' => 'admin',
												'ctl' => 'dashboard'
											)
										); ?>" class="nav-link active">
								<i class="far fa-circle nav-icon"></i>
								<p>Dashboard v1</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="<?php echo vendor_app_util::url(['area' => 'admin', 'ctl' => 'users']); ?>" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Users management
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="pages/widgets.html" class="nav-link">
						<i class="nav-icon fas fa-cart-shopping"></i>
						<p>
							Products management
						</p>
					</a>
				</li>

			</ul>
		</nav>

	</div>

</aside>