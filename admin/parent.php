<?php require_once('app/pages_contoller.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard-E-Global Support</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <?php include("header-links.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>
    <?php include("header.php"); ?>
    <?php include("side-bar.php"); ?>
    <main id="main" class="main">

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'] . '.php';
            if (file_exists($page)) {
                new Page($page);
            }else{
                echo "( $page ) File Not Found";
            }
        }
        ?>
    </main><!-- End #main -->

    <?php include("footer.php"); ?>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
</body>

</html>