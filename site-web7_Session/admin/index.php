<?php
// Bắt đầu session và bật output buffering để tránh lỗi header
ob_start();
session_start();

// Trang mặc định
$page = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Sinh Viên</title>
    <link rel="stylesheet" href="../style.css?v=1">
</head>
<body>
   <div id="container">
        <div id="head"><?php include("../../site-web2/pages/head.php"); ?></div>
        <div id="menu"><?php include("../../site-web2/pages/menu.php"); ?></div>

        <div id="main">
            <div id="left"><?php include("../../site-web2/pages/left.php"); ?></div>
            <div id="center">

                <!-- Menu điều hướng -->
<div class="menu">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=upload">Upload</a>
    <a href="index.php?page=logout">Logout</a> <!-- trỏ qua switch case -->
</div>


                <!-- Nội dung chính -->
<div class="content">
    <?php
    switch ($page) {
        case 'upload':
            include 'pages/upload.php';
            break;

        case 'logout':
            include 'pages/logout.php';
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

        <div id="footer"><?php include("../../site-web2/pages/footer.php"); ?></div>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>
