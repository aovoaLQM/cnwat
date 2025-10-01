<?php
// admin/pages/upload.php
// Không gọi session_start() ở đây

$message = "";
// Khi submit form, action trỏ tới admin/index.php?page=upload -> form được include ở trong admin/index.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) {
    // __DIR__ ở file này là admin/pages
    $uploadDir = __DIR__ . '/../../uploads/'; // -> site-web7_Session/uploads/
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $filename = basename($_FILES['myfile']['name']);
    $target = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target)) {
        $message = "Upload thành công: " . htmlspecialchars($filename);
    } else {
        $message = "Upload thất bại!";
    }
}
?>
<h3>Upload File</h3>
<?php if ($message): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<!-- action trỏ tới admin/index.php?page=upload (tương đối so với admin folder) -->
<form method="post" enctype="multipart/form-data" action="index.php?page=upload">
    <input type="file" name="myfile" required>
    <button type="submit">Upload</button>
</form>
