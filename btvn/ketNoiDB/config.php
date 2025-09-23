<?php
$servername = "localhost";   // server MySQL
$username   = "root";        // user mặc định của XAMPP
$password   = "";            // mật khẩu mặc định trống
$dbname     = "mydb";        // tên cơ sở dữ liệu bạn vừa tạo

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "Kết nối thành công!";
}
?>
