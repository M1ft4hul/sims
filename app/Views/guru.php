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
                    <a class="dropdown-item" href="<?php echo base_url('/log') ?>">Logout</a>
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
                    <li>
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
                    <li class="active">
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
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Guru</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Guru</li>
                        </ul>
                    </div>
                    <div class="col-auto text-right float-right ml-auto">
                        <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i>
                            Download</a>
                        <a href="<?php echo base_url('/guruForms') ?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!--  tabel -->
            <div class="row">
                <div class="col-sm-12">

                    <div class="card card-table">
                        <div class="card-body">

                            <div class="sweetalert" data-sweetalert="<?= session()->get('sukses'); ?>"></div>

                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Mata Pelajaran</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $a = 1; ?>
                                        <?php foreach ($tampil as $g) : ?>
                                            <tr>
                                                <td><?= $a++ ?></td>
                                                <td><?= $g['nip']; ?></td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="<?php echo base_url() ?>/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                                        <a href="/detailGuru/<?= $g['nip']; ?>"><?= $g['nama_lengkap']; ?></a>
                                                    </h2>
                                                </td>
                                                <td><?= $g['jenis_kelamin']; ?></td>
                                                <td><?= $g['mata_pelajaran']; ?></td>
                                                <td class="text-right">
                                                    <div class="actions">
                                                        <a href="edit-teacher.html" class="btn btn-sm bg-success-light mr-2">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <form action="/guruDelete/<?= $g['id']; ?>" class="d-inline" method="post">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-sm bg-danger-light"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>