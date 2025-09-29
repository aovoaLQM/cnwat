<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Lỗi prepare SQL: " . $conn->error);
    }

    $stmt->bind_param("ss", $user, $pass);

    if ($stmt->execute()) {
        echo "Đăng ký thành công! <a href='login.php'>Đăng nhập</a>";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
}
?>

<form method="POST">
    <h2>Đăng ký</h2>
    Tên đăng nhập: <input type="text" name="username" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    <button type="submit">Đăng ký</button>
</form>
