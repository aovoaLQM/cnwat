<?php 
$page = $_GET['page'] ?? 'home'; // Trang mặc định là 'home'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Sinh Viên</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=1">
        <link rel="stylesheet" href="style.css?v=3">


</head>
<body>
   <div id="container">
    <div id="head"><?php include("../site-web2/pages/head.php"); ?></div>
    <div id="menu"><?php include("../site-web2/pages/menu.php"); ?></div>

    <div id="main">
        <div id="left"><?php include("../site-web2/pages/left.php"); ?></div>
        <div id="center"> <?php include("../site-web2/pages/center.php"); ?>
        <!-- Menu -->
<div class="menu">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=drawTable">DrawTable</a>
    <a href="index.php?page=loop">Loop</a>
    <a href="index.php?page=calculate1">Calculate1</a>
    <a href="index.php?page=calculate2">Calculate2</a>
    <a href="index.php?page=array1">Array1</a>
    <a href="index.php?page=array2">Array2</a>
    <a href="index.php?page=uploadprocess">uploadprocess</a>
    
</div>

<!-- Nội dung -->
<div class="content">
    <?php
    switch ($page) {
        case 'drawTable':
            include 'pages/drawTable.php';
            break;

        case 'loop':
            include 'pages/loop.php';
            break;

        case 'calculate1':
            include 'pages/calculate1.php';
            break;

        case 'calculate2':
            include 'pages/calculate2.php';
            break;

        case 'array1':
            include 'pages/array1.php';
            break;

        case 'array2':
            include 'pages/array2.php';
            break;




        case 'uploadform':
            include 'pages/uploadform.php';
            break;

        case 'uploadprocess':
            include 'pages/uploadprocess.php';
            break;

        case 'home':
        default:
            include 'pages/home.php';
            break;
    }
    ?>
</div>

    
    </div>    
    </div>

    <div id="footer"><?php include("../site-web2/pages/footer.php"); ?></div>
</div>

<script src ="script.js"></script>

</body>
</html>
