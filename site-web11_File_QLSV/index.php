<?php 
$page = $_GET['page'] ?? 'home'; // Trang mặc định là 'home'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Sinh Viên</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../site-web3/style.css">
</head>
<body>
   <div id="container">
        <div id="head"><?php include("../site-web2/pages/head.php"); ?></div>
        <div id="menu"><?php include("../site-web2/pages/menu.php"); ?></div>

        <div id="main">
            <div id="left"><?php include("../site-web2/pages/left.php"); ?></div>
            
            <div id="center">
                <!-- Menu riêng cho phần chức năng -->
                <div class="menu"> 
                    <a href="index.php?page=home">Home</a>
                    <a href="index.php?page=list">list</a> 
                    <a href="index.php?page=add">Add</a>
                </div>

                <!-- Nội dung động -->
                <div class="content">
                    <?php
                    switch ($page) {
                        case 'add':
                            include 'pages/add.php';
                            break;

                        case 'list':
                            include 'pages/list.php';
                            break;



                        default:
                            include 'pages/home.php'; // Trang mặc định
                            break;
                    }
                    ?>



                </div>
            </div>    
        </div>

        <div id="footer"><?php include("../site-web2/pages/footer.php"); ?></div>
   </div>

   <script src="script.js"></script>
</body>
</html>
