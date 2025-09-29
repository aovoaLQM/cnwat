<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit;
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }
    $stmt->close();
}
?>

<form method="POST">
    <h2>Đăng nhập</h2>
    Tên đăng nhập: <input type="text" name="username" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    <button type="submit">Đăng nhập</button>
</form>
<a href="register.php">Chưa có tài khoản? Đăng ký</a>
