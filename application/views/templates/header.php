<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('tempset/') ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('tempset/') ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('tempset/') ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url('tempset/') ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url('tempset/') ?>assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="<?= base_url('tempset/') ?>vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Notyf -->
    <link type="text/css" href="<?= base_url('tempset/') ?>vendor/notyf/notyf.min.css" rel="stylesheet">
    <!-- Volt CSS -->
    <link type="text/css" href="<?= base_url('tempset/') ?>css/volt.css" rel="stylesheet">
    <!-- Custom Link -->
    <link href="<?= base_url('tempset/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('tempset/') ?>vendor/DataTables/datatables.min.css" rel="stylesheet" />

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
    <!-- Core -->
    <script src="<?= base_url('tempset/') ?>vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('tempset/') ?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Vendor JS -->
    <script src="<?= base_url('tempset/') ?>vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="<?= base_url('tempset/') ?>jquery-3.6.4.min.js"></script>
    <!-- Slider -->
    <script src="<?= base_url('tempset/') ?>vendor/nouislider/distribute/nouislider.min.js"></script>
    <!-- Smooth scroll -->
    <script src="<?= base_url('tempset/') ?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Charts -->
    <script src="<?= base_url('tempset/') ?>vendor/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url('tempset/') ?>vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Datepicker -->
    <script src="<?= base_url('tempset/') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <!-- Sweet Alerts 2 -->
    <script src="<?= base_url('tempset/') ?>vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <!-- Vanilla JS Datepicker -->
    <script src="<?= base_url('tempset/') ?>vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <!-- Notyf -->
    <script src="<?= base_url('tempset/') ?>vendor/notyf/notyf.min.js"></script>
    <!-- Simplebar -->
    <script src="<?= base_url('tempset/') ?>vendor/simplebar/dist/simplebar.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url('tempset/') ?>vendor/DataTables/datatables.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="<?= base_url('tempset/') ?>assets/js/volt.js"></script>
    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Anda ingin Logout?',
                showCancelButton: true,
                confirmButtonText: '<a class="text-white" href="<?= site_url('auth/logout') ?>">Logout</a>'
            })
        }
    </script>
</head>

<body>
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->