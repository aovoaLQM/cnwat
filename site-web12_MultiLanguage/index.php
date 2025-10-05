<?php
// Bắt đầu session
session_start();

// Lấy tham số page từ GET
$page = "home"; // mặc định là home
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

// Nếu page gửi theo POST
if (isset($_POST["page"])) {
    $page = $_POST["page"];
}

// Ngôn ngữ mặc định
$lang = "english";

// Nếu session đã có ngôn ngữ thì dùng nó
if (isset($_SESSION["lang"])) {
    $lang = $_SESSION["lang"];
}

// Xử lý khi submit form chọn ngôn ngữ
if (isset($_POST["btnEnglish"])) {
    $_SESSION["lang"] = "english";
    header("Location: index.php?page=$page");
    exit();
}

if (isset($_POST["btnVietnamese"])) {
    $_SESSION["lang"] = "vietnamese";
    header("Location: index.php?page=$page");
    exit();
}

// Import file ngôn ngữ tương ứng
require_once("lang/" . $lang . ".php");
?>


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
                 <div ><?php include("pages/menu.php"); ?></div>
                <!-- Menu riêng cho phần chức năng -->


                <!-- Nội dung động -->
                <div class="content">
                    <?php
                    switch ($page) {
                        case 'contact':
                            include 'pages/contact.php';
                            break;

                        case 'introduction':
                            include 'pages/introduction.php';
                            break;

                        case 'login':
                            include 'pages/login.php';
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
