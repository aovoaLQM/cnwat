<?php
// Không cần session_start() vì index.php đã gọi rồi

// Nếu đã đăng nhập thì tự động chuyển sang admin
if (!empty($_SESSION['Username'])) {
    header("Location: ../admin/index.php");
    exit;
}

$error = "";

// Xử lý form đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"] ?? '';
    $pass = $_POST["password"] ?? '';

    if ($name === "admin" && $pass === "admin") {
        $_SESSION["Username"] = $name;

        // Chuyển hướng sang admin
        header("Location: /hrm.abc.com.vn/site-web7_Session/admin/index.php");
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>

    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Đăng nhập">
        <input type="reset" value="Nhập lại">
    </form>
</body>
</html>
