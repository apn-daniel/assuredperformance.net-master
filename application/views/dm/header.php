<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <?php if (isset($css)): ?>
        <?php if (is_array($css)): ?>
            <?php foreach ($css as $path): ?>
                <link rel="stylesheet" href="<?php echo site_url($path) ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon.ico">

    <!-- custom js files -->
    <?php if (isset($js)): ?>
        <?php if (is_array($js)): ?>
            <?php foreach ($js as $path): ?>
                <script type="text/javascript" src="<?php echo site_url($path) ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center" id="logo">
            <!-- logo -->
            <img src="<?php echo site_url('assets/images/logo.png') ?>"/>


            <h1><?php echo $title ?></h1>
            <hr/>
        </div>


