<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/datatables/datatables.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/style.css">


</head>

<body>



    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer>
        <p>Copyright © 2021 Modul SMK.</p>
    </footer>
    <!-- /Footer -->

    </div>
    <!-- /Page Wrapper -->



    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?php echo base_url() ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="<?php echo base_url() ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="<?php echo base_url() ?>/plugins/datatables/datatables.min.js"></script>

    <!-- Chart JS -->
    <script src="<?php echo base_url() ?>/plugins/apexchart/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>/plugins/apexchart/chart-data.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url() ?>/js/script.js"></script>

    <!-- sweetalert -->
    <script src="<?php echo base_url(); ?>/sweetalert/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>/sweetalert/mysweet.js"></script>

</body>

</html>