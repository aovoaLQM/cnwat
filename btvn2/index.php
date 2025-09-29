<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Xin chào, <?php echo $_SESSION['username']; ?>!</h2>
<p>Bạn đã đăng nhập thành công.</p>
<a href="logout.php">Đăng xuất</a>
