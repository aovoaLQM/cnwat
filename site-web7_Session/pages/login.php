<?php
// index.php đã gọi session_start() nên không cần gọi lại ở đây

// Nếu đã đăng nhập thì tự động chuyển sang admin
if (!empty($_SESSION['Username'])) {
    header("Location: ../site-web7_Session/admin/index.php");
    exit;
}

// Nếu có cookie thì lấy sẵn
$username = $_COOKIE['Username'] ?? '';
$password = $_COOKIE['Password'] ?? '';

$error = "";

// Xử lý form đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"] ?? '';
    $pass = $_POST["password"] ?? '';

    if ($name === "admin" && $pass === "admin") {
        $_SESSION["Username"] = $name;

        // Lưu cookie 30 ngày
        setcookie("Username", $name, time() + 30*24*60*60, "/");
        setcookie("Password", $pass, time() + 30*24*60*60, "/");

        // Chuyển hướng sang admin
        header("Location: ../site-web7_Session/admin/index.php");
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
        <input type="text" name="username" value="<?= htmlspecialchars($username) ?>" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" value="<?= htmlspecialchars($password) ?>" required><br><br>

        <input type="submit" value="Đăng nhập" name="btnDangNhap">
        <input type="reset" value="Nhập lại">
    </form>
</body>
</html>
