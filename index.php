<?php session_start(); ?>
<?php include 'includes/db_connect.php'; ?>
<?php if (!isset($_SESSION['user_login'])) { ?>
    <?php include 'page/auth/login/index.php'; ?>
<?php } else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - Mazer Admin Dashboard</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    </head>

    <body>
        <script src="assets/vendors/jquery/jquery.min.js"></script>
        <div id="app">
            <div id="sidebar" class="active">
                <?php include 'templates/sidebar.php'; ?>
            </div>
            <div id="main">

                <?php include 'templates/header.php'; ?>
                <!-- < ?php include 'page/dashboard.php';?> -->
                <div id='content_page'>
                   
                </div>


                <?php include 'templates/footer.php'; ?>
            </div>
        </div>
        <script src="assets/js/loadpage.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    </body>

    </html>
<?php } ?>