<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- HTML Variables -->
        <?php
        $mainUrl = 'http://192.168.0.115/ns-admin-panel/dev/';
        $imagePath = 'public/images';
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $imagePath; ?>/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $imagePath; ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $imagePath; ?>/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $imagePath; ?>/favicon/site.webmanifest">
        <meta name="application-name" content="NS Bootstrap">

        <!--Theme CSS-->
        <link href="public/css/app.css" rel="stylesheet" type="text/css"/>

        <meta property="og:url"           content="<?php echo $mainUrl; ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="" />
        <meta property="og:description"   content="" />
        <meta property="og:image"         content="<?php echo $imagePath; ?>" />

        <!-- SEO -->
        <meta name="description" content="" />
        <title><?php echo $title ?> – NS Bootstrap</title>
    </head>
    <body>
        <?php include 'inc_header.php'; ?>