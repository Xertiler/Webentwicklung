<?php
include_once ('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/9678e46865.js" crossorigin="anonymous"></script>
    <title><?php echo $title_name;?></title>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <div>
            <h1 class="display-4" style="padding-left:27.5%"><?php echo make_header($title_name); ?></h1>
        </div>
    </div>
