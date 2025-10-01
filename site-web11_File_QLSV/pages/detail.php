<?php
// Lấy id trên URL
$id = $_GET["id"] ?? null;
if (!$id) {
    die("Không có ID sinh viên!");
}

$students = file("../student.txt", FILE_IGNORE_NEW_LINES);
$student = null;

foreach ($students as $line) {
    $parts = explode("|", $line);

    // Phải có đúng 6 trường (id|name|birthday|address|image|class)
    if (count($parts) < 6) {
        continue; // bỏ qua dòng sai
    }

    list($sid, $name, $birthday, $address, $image, $class) = $parts;

    if ($sid == $id) {
        $student = [
            "id" => $sid,
            "name" => $name,
            "birthday" => $birthday,
            "address" => $address,
            "image" => $image,
            "class" => $class
        ];
        break;
    }
}

if (!$student) {
    die("Không tìm thấy sinh viên!");
}

// Nếu không có ảnh thì dùng ảnh mặc định
$imagePath = !empty($student["image"]) ? "../../uploads/" . $student["image"] : "../uploads/no-image.png";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sinh viên</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .student-detail { width: 300px; border: 1px solid #ccc; padding: 15px; }
        .student-detail img { max-width: 100%; height: auto; margin-bottom: 10px; }
        .student-detail b { font-size: 18px; }
    </style>
</head>
<body>
    <h2>Chi tiết sinh viên</h2>
    <div class="student-detail">
        <img src="<?php echo $imagePath; ?>" alt="Ảnh sinh viên">
        <b><?php echo htmlspecialchars($student["name"]); ?></b><br>
        <i>Sinh ngày:</i> <?php echo htmlspecialchars($student["birthday"]); ?><br>
        <i>Địa chỉ:</i> <?php echo htmlspecialchars($student["address"]); ?><br>
        <i>Lớp:</i> <?php echo htmlspecialchars($student["class"]); ?><br>
    </div>
    <br>
    <a href="list.php">← Quay lại danh sách</a>
</body>
</html>
