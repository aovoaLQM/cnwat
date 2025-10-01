<?php
// admin/logout.php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// Redirect về trang người dùng (root index)
header("Location: ../index.php?page=home");
exit();
