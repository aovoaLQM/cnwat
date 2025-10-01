<?php


// Kiểm tra login
if (empty($_SESSION['Username'])) {
    echo "Bạn chưa đăng nhập!";
    exit;
}

// Lấy danh sách link từ Cookie (dạng JSON)
$favLinks = [];
if (isset($_COOKIE['favLinks'])) {
    $favLinks = json_decode($_COOKIE['favLinks'], true);
    if (!is_array($favLinks)) {
        $favLinks = [];
    }
}

// Nếu người dùng thêm link mới
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newLink = trim($_POST['newLink'] ?? '');
    if (!empty($newLink)) {
        $favLinks[] = $newLink;
        // Lưu lại Cookie (30 ngày)
        setcookie('favLinks', json_encode($favLinks), time() + 30*24*60*60, "/");
        // Refresh để thấy kết quả ngay
        header("Location: favourist.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Web Links Ưa Thích</title>
</head>
<body>
    <h2>Danh sách Web Links Ưa Thích</h2>

    <?php if (!empty($favLinks)): ?>
        <ul>
            <?php foreach ($favLinks as $link): ?>
                <li><a href="<?= htmlspecialchars($link) ?>" target="_blank"><?= htmlspecialchars($link) ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Chưa có link nào trong danh sách ưa thích.</p>
    <?php endif; ?>

    <h3>Thêm Link Mới</h3>
    <form method="POST">
        <input type="url" name="newLink" placeholder="https://example.com" required>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>
