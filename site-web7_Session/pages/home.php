<?php
// Ví dụ tạo Cookie
setcookie("TenUser", "Pham Minh", time() + 60*60*24*30, "/"); // 30 ngày
setcookie("lasttime", time(), time() + 60*60*24*30, "/"); // Lưu thời điểm login cuối

// Đọc Cookie
$tenUser = $_COOKIE['TenUser'] ?? 'Chưa có';
$lastTime = isset($_COOKIE['lasttime']) ? date("d/m/Y H:i:s", $_COOKIE['lasttime']) : 'Chưa có';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Home</title>
</head>
<body>
    <h2>Cookies</h2>
    <p>Cookie là 1 đoạn dữ liệu được ghi trong máy Client do trình duyệt quản lý. 
       Nó được trình duyệt gửi ngược lên lại server mỗi khi browser tải 1 trang web từ server.</p>
    <ul>
        <li>Không dùng cookies để lưu những thông tin quan trọng vì không đảm bảo</li>
        <li>Thường dùng ghi nhớ (username, password, thời điểm login cuối, danh sách ưa thích…)</li>
    </ul>

    <h3>Tạo cookie:</h3>
    <code>
        setcookie("TenUser", "Pham Minh", time()+60*60*24*30); <br>
        setcookie("lasttime", time(), time()+60*60*24*30);
    </code>

    <h3>Sử dụng cookie:</h3>
    <code>
        echo $_COOKIE["TenUser"]; <br>
        echo $_COOKIE["lasttime"];
    </code>

    <h3>Kết quả đọc từ cookie hiện tại:</h3>
    <p><b>TenUser:</b> <?= htmlspecialchars($tenUser) ?></p>
    <p><b>LastTime:</b> <?= htmlspecialchars($lastTime) ?></p>
</body>
</html>
