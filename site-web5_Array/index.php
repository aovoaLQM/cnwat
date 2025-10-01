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
                    <a href="index.php?page=ar1Chieu">Ar 1 Chieu</a> 
                    <a href="index.php?page=matrix">Matrix</a>
                    <a href="index.php?page=registerProcess">AssociateArr</a> 
                </div>

                <!-- Nội dung động -->
                <div class="content">
                    <?php
                    switch ($page) {
                        case 'ar1Chieu':
                            include 'pages/ar1Chieu.php';
                            break;

                        case 'matrix':
                            include 'pages/matrix.php';
                            break;

                        case 'registerProcess':
                            include 'pages/registerProcess.php';
                            break;

                        default:
                            include 'pages/home.php'; // Trang mặc định
                            break;
                    }
                    ?>

<?php
require_once("libs/math.php");

echo "<br>";

// Gọi hàm vẽ bảng
VeBang();
echo "<br>";

// Gọi hàm Max2
echo "Số lớn nhất: " . Max2(100, 10);
echo "<br>";

// Kiểm tra login
if (CheckLogin("admin", "admin")) {
    echo "<br>Đăng nhập thành công";
} else {
    echo "<br>Sai tên đăng nhập hoặc mật khẩu<br>";
}

// Gọi hàm truyền mảng
$mang = array(10, 2, 8, 6, 4, 1, 9);
echo "<br>Tổng theo cách 1: " . TongDay1($mang);
echo "<br>Tổng theo cách 2: " . TongDay2($mang);
?>



                </div>
            </div>    
        </div>

        <div id="footer"><?php include("../site-web2/pages/footer.php"); ?></div>
   </div>

   <script src="script.js"></script>
</body>
</html>
