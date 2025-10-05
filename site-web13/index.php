<?php
// index.php — Trang chính quản lý Lớp & Hồ sơ
$trang  = isset($_GET['trang'])  ? $_GET['trang']  : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';
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
                <!-- Menu riêng -->
                <div class="menu"> 
                    <a href="index.php?trang=lop">Danh sách Lớp</a>
                    <a href="index.php?trang=hoso">Danh sách Hồ sơ</a>
                </div>

                <!-- Nội dung động -->
                <div class="content">
                <?php
                    switch ($trang) {
                        case 'lop':
                            switch ($action) {
                                case 'add': include("lop/add.php"); break;
                                case 'edit': include("lop/edit.php"); break;
                                case 'delete': include("lop/delete.php"); break;
                                default: include("lop/list.php");
                            }
                            break;

                        case 'hoso':
                            switch ($action) {
                                case 'add': include("hoso/add.php"); break;
                                case 'edit': include("hoso/edit.php"); break;
                                case 'delete': include("hoso/delete.php"); break;
                                default: include("hoso/list.php");
                            }
                            break;

                        default:
                            echo "<h3>Chọn một mục bên trên để xem dữ liệu!</h3>";
                    }
                ?>
                </div>
            </div>    
        </div>

        <div id="footer"><?php include("../site-web2/pages/footer.php"); ?></div>
   </div>
</body>
</html>
