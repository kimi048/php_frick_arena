<?php
    if(!isLoggedIn()){
        redirect(getRoute('home'));
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo config("site_name"); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo config("site_domain"); ?>/resources/css/bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo config("site_domain"); ?>/resources/css/admin_global.css" rel="stylesheet">
     <!-- jQuery -->
     <script src="<?php echo config("site_domain"); ?>/resources/js/jquery.min.js"></script>
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo config("site_domain"); ?>/resources/css/bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>

<body>