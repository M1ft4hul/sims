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
                            <li><a href="<?php echo base_url('/kelasIndex') ?>">Kelas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="students.html"><i class="fas fa-user-graduate"></i> <span> Students</span></a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('guruIndex'); ?>"><i class="fas fa-chalkboard-teacher"></i> <span> Data Guru</span></a>
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
                        <h3 class="page-title">Tambah Data Guru</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('/guruIndex') ?>">Guru</a></li>
                            <li class="breadcrumb-item active">Tambah Data Guru</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url('/guruTambah'); ?>" method="POST">
                                <?= csrf_field(); ?>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Data Pribadi</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input type="text" name="nip" class="form-control <?php if ($validation->hasError('nip')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('nip') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('nip')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('nip') . "</div>";
                                        } ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Nama Panjang</label>
                                            <input type="text" name="nama_lengkap" class="form-control  <?php if ($validation->hasError('nama_lengkap')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('nama_lengkap') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('nama_lengkap')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('nama_lengkap') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Gelar Belakang</label>
                                            <input class="form-control <?php if ($validation->hasError('gelar_blkng')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('gelar_blkng') ?>" name="gelar_blkng" type="text" placeholder="S.Pd,M.Pd" />
                                        </div>
                                        <?php if ($validation->hasError('gelar_blkng')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('gelar_blkng') . "</div>";
                                        } ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control <?php if ($validation->hasError('tempat_lahir')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('tempat_lahir') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('tempat_lahir')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('tempat_lahir') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <?php
                                            $db      = \Config\Database::connect();
                                            $builder = $db->table('tb_pelajaran');
                                            ?>
                                            <?php $mapel = $builder->get(); ?>
                                            <label>Mapel Ajar</label>
                                            <select name="mata_pelajaran" class="form-control">
                                                <?php foreach ($mapel->getResult() as $m) { ?>
                                                    <option>
                                                        <?php echo $m->mata_pelajaran; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>No hp</label>
                                            <input type="number" name="no_hp" class="form-control <?php if ($validation->hasError('no_hp')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('no_hp') ?>" pattern=" \(\d\d\)-\d\d\d\d\d\d\d\d\d\d\d\" name="ponsel" placeholder="+(62)-85xxxxxxxxx" />
                                        </div>
                                        <?php if ($validation->hasError('no_hp')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('no_hp') . "</div>";
                                        } ?>
                                    </div>

                                    <div class="col-12">
                                        <h5 class="form-title"><span>Data Login</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control <?php if ($validation->hasError('username')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('username') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('username')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('username') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control <?php if ($validation->hasError('email')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('email') ?>" placeholder=" aab@gmail.com" />
                                        </div>
                                        <?php if ($validation->hasError('email')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('email') . "</div>";
                                        } ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" id="pass" class="form-control <?php if ($validation->hasError('password')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('password') ?>" />
                                            <div class="col-md-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="show" name="checkbox" onclick="tampil_pass()"> Show Password
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($validation->hasError('password')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('password') . "</div>";
                                        } ?>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Ulangi Password</label>
                                            <input type="password" name="ulangi_password" id="pass" class=" form-control <?php if ($validation->hasError('ulangi_password')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('ulangi_password') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('ulangi_password')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('ulangi_password') . "</div>";
                                        } ?>
                                    </div>

                                    <div class=" col-12">
                                        <h5 class="form-title"><span>Address</span></h5>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Alamat rumah</label>
                                            <input type="text" name="alamat" class="form-control  <?php if ($validation->hasError('alamat')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('alamat') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('alamat')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('alamat') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control <?php if ($validation->hasError('kecamatan')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('kecamatan') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('kecamatan')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('kecamatan') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Kelurahan</label>
                                            <input type="text" name="kelurahan" class="form-control  <?php if ($validation->hasError('kelurahan')) : echo ' is-invalid '; ?> <?php endif; ?>" value="<?= old('kelurahan') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('kelurahan')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('kelurahan') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Kabupaten/kota</label>
                                            <input type="text" name="kabupaten" class="form-control <?php if ($validation->hasError('kabupaten')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('kabupaten') ?>" />
                                        </div>
                                        <?php if ($validation->hasError('kabupaten')) {
                                            echo "<div class='alert alert-danger'>" . $validation->getError('kabupaten') . "</div>";
                                        } ?>
                                    </div>
                                    <div class=" col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="text" name="kodepos" class="form-control <?php if ($validation->hasError('kodepos')) : echo ' is-invalid ' ?> <?php endif; ?>" value="<?= old('kodepos') ?>"" />
                                        </div>
                                            <?php if ($validation->hasError('kodepos')) {
                                                echo "<div class='alert alert-danger'>" . $validation->getError('kodepos') . "</div>";
                                            } ?>
                                    </div>
                                    <div class=" col-12">
                                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function tampil_pass() {
                var pass = document.getElementById('pass');
                if (pass.type === 'password') {
                    pass.type = 'text';
                } else {
                    pass.type = 'password';
                }
            }
        </script>
        <?= $this->endSection(); ?>