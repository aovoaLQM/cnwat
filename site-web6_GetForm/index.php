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

</head>
<body>
   <div id="container">
    <div id="head"><?php include("../site-web2/pages/head.php"); ?></div>
    <div id="menu"><?php include("../site-web2/pages/menu.php"); ?></div>

    <div id="main">
        <div id="left"><?php include("../site-web2/pages/left.php"); ?></div>
        <div id="center"> <?php include("../site-web2/pages/center.php"); ?>

 <!-- Menu --> <div class="menu"> 
        <a href="index.php?page=home">Home</a>
        <a href="index.php?page=contact1Page">contact1Page</a> 
        <a href="index.php?page=register">register</a>
        <a href="index.php?page=registerProcess">registerProcess</a> 
</div>

<div class="content">
    <?php
    switch ($page) {
        case 'contact1Page':
            include 'pages/contact1Page.php';
            break;

        case 'register':
            include 'pages/register.php';
            break;

        case 'registerProcess':
            include 'pages/registerProcess.php';
            break;

        default:
            include 'pages/home.php'; // thêm trang mặc định để tránh lỗi
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
