<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Main Wrapper -->
<div class="main-wrapper">

	<!-- Header -->
	<div class="header">

		<!-- Logo -->
		<div class="header-left">
			<a href="index.html" class="logo">
				<img src="<?php echo base_url() ?>/img/logo.png" alt="Logo">
			</a>
			<a href="index.html" class="logo logo-small">
				<img src="<?php echo base_url() ?>/img/logo-small.png" alt="Logo" width="30" height="30">
			</a>
		</div>
		<!-- /Logo -->

		<a href="javascript:void(0);" id="toggle_btn">
			<i class="fas fa-align-left"></i>
		</a>

		<!-- Mobile Menu Toggle -->
		<a class="mobile_btn" id="mobile_btn">
			<i class="fas fa-bars"></i>
		</a>
		<!-- /Mobile Menu Toggle -->

		<!-- Header Right Menu -->
		<ul class="nav user-menu">

			<!-- User Menu -->
			<li class="nav-item dropdown has-arrow">
				<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
					<span class="user-img"><img class="rounded-circle" src="<?php echo base_url() ?>/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
				</a>
				<div class="dropdown-menu">
					<div class="user-header">
						<div class="avatar avatar-sm">
							<img src="<?php echo base_url() ?>/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
						</div>
						<div class="user-text">
							<h6>Ryan Taylor</h6>
							<p class="text-muted mb-0">Administrator</p>
						</div>
					</div>
					<a class="dropdown-item" href="profile.html">My Profile</a>
					<a class="dropdown-item" href="<?php echo base_url('/log')?>">Logout</a>
				</div>
			</li>
			<!-- /User Menu -->

		</ul>
		<!-- /Header Right Menu -->

	</div>
	<!-- /Header -->

	<!-- Sidebar -->
	<div class="sidebar" id="sidebar">
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<li class="menu-title">
						<span>Main Menu</span>
					</li>
					<li class="active">
						<a href="<?php echo base_url('/'); ?>"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
					</li>
					<li class="submenu">
						<a href="#"><i class="fas fa-book-reader"></i> <span> Master Data</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a href="<?php echo base_url('/MapelView') ?>">Mata Pelajaran</a></li>
							<li><a href="<?php echo base_url('/kelasIndex')?>">Kelas</a></li>
						</ul>
					</li>
					<li>
						<a href="students.html"><i class="fas fa-user-graduate"></i> <span> Students</span></a>
					</li>
					<li>
						<a href="<?php echo base_url('/guruIndex'); ?>"><i class="fas fa-chalkboard-teacher"></i> <span> Data Guru</span></a>
					</li>

					<li class="menu-title">
						<span>Management</span>
					</li>

					<li class="submenu">
						<a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Management User</span> <span class="menu-arrow"></span></a>
						<ul>
							<li><a href="fees-collections.html">Data User</a></li>
						</ul>
					</li>

					<li class="menu-title">
						<span>Informasi Sekolah</span>
					</li>
					<li>
						<a href="departments.html"><i class="fas fa-building"></i> <span> Identitas Sekolah</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Sidebar -->

	<!-- Page Wrapper -->
	<div class="page-wrapper">

		<div class="content container-fluid">
			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">Welcome Admin!</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item active">Dashboard</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-12 col-sm-6 col-12">
					<div class="card bg-two1">
						<div class="card-body">
							<!-- <div class="db-widgets d-flex justify-content-between align-items-center"> -->
							<!-- <div class="db-icon">
                                        <i class="fas fa-crown"></i>
                                    </div> -->
							<div class="db-info2">
								<h6><b>SELAMAT DATANG DI</b></h6>
								<h4><b>SISTEM INFORMASI MANAGEMENT SEKOLAH</b></h4>
								<img src="<?php echo base_url() ?>/img/smk.jpg" alt="ini">
								<h5>SMK NEGERI 4 KENDARI</h5>
								<h6>Jl. Kijang No. 5 Rahandouna, Poasia Kota Kendari.</h6>
							</div>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<!-- Overview Section -->
			<div class="row">
				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card bg-one">
						<div class="card-body">
							<div class="db-widgets d-flex justify-content-between align-items-center">
								<div class="db-icon">
									<i class="fas fa-user-graduate"></i>
								</div>
								<div class="db-info">
									<h3>50055</h3>
									<h6>Siswa</h6>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card bg-two">
						<div class="card-body">
							<div class="db-widgets d-flex justify-content-between align-items-center">
								<div class="db-icon">
									<i class="fas fa-chalkboard-teacher"></i>
								</div>
								<div class="db-info">
									<h3>50+</h3>
									<h6>Guru</h6>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card bg-three">
						<div class="card-body">
							<div class="db-widgets d-flex justify-content-between align-items-center">
								<div class="db-icon">
									<i class="fas fa-file"></i>
								</div>
								<div class="db-info">
									<h3>30+</h3>
									<h6>Jurusan</h6>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-3 col-sm-6 col-12">
					<div class="card bg-four">
						<div class="card-body">
							<div class="db-widgets d-flex justify-content-between align-items-center">
								<div class="db-icon">
									<i class="fas fa-building"></i>
								</div>
								<div class="db-info">
									<h3>$505</h3>
									<h6>Kelas</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Overview Section -->
		</div>
		<?= $this->endSection(); ?>