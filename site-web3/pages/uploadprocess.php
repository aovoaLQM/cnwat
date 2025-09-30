<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang UploadProcess</h2>";
?>


<?php
if (isset($_POST['submit'])) {
    $uploadDir = "uploads/";

    // Tạo thư mục nếu chưa có
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $files = $_FILES['files'];
    $uploadedFiles = [];

    for ($i = 0; $i < count($files['name']); $i++) {
        if ($files['error'][$i] === UPLOAD_ERR_OK && $files['name'][$i] != "") {
            $fileName = basename($files['name'][$i]);
            $targetPath = $uploadDir . $fileName;

            if (move_uploaded_file($files['tmp_name'][$i], $targetPath)) {
                $uploadedFiles[$fileName] = $targetPath; // Mảng kết hợp: [Tên file => Đường dẫn]
            }
        }
    }

    // In kết quả
    if (!empty($uploadedFiles)) {
        echo "<h3>Danh sách file đã upload:</h3>";
        echo "<ul>";
        foreach ($uploadedFiles as $name => $path) {
            echo "<li>$name - <a href='$path' download>Tải về</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Không có file nào được upload!";
    }
}
?>

<h2>Danh sách file đã upload</h2>
<?php
$upload_dir = "uploads/";

