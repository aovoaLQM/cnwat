<?php
// admin/pages/home.php
// Không gọi session_start() ở đây vì admin/index.php đã gọi rồi.
?>
<h3>Trang Home (Admin)</h3>
<p>Thông tin người dùng: <?= htmlspecialchars($_SESSION['Username'] ?? '') ?></p>
