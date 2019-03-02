<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="<?=$robots?>" />
    <meta name="description" content="<?=$meta_description ?>" />
    <meta name="description" content="<?=$meta_descriptio_contact ?>" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" href="css/contact_form.css" />
    <link rel="stylesheet" type="text/css" href="css/aia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<!-- START Header -->
<header>
    <div class="topnav nax-fixed" id="myTopnav">
        <?= makeLinks($nav1) ?>
        <?php 
        /*
        <a href="index.php" class="">">Home</a>
        <a href="#" >Big Project</a>
        <a href="aia.php" class="">AIA</a>
        <a href="#" class="">Flowchart</a>
        <a href="#" class="">Final Project</a>
        <a href="contactme.php" class="">Contact</a>
        */
        ?>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>     
</header>
<!--END Header-->