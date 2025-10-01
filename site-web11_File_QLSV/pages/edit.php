<?php
$id = $_GET["id"] ?? null;
if (!$id) die("Không có ID sinh viên!");

// Đọc dữ liệu
$students = file("../student.txt", FILE_IGNORE_NEW_LINES);
$student = null;

foreach ($students as $line) {
    $parts = explode("|", $line);

    // Bỏ qua dòng không đủ 6 trường
    if (count($parts) < 6) {
        continue;
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

if (!$student) die("Không tìm thấy sinh viên!");

// Khi submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $class = $_POST["class"];

    // Xử lý ảnh (nếu có upload mới thì thay thế, không thì giữ nguyên)
    $image = $student["image"];
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image = basename($_FILES["image"]["name"]);
        $target = "../../uploads/" . $image;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target);
    }

    // Cập nhật lại dữ liệu
    $newLine = "$id|$name|$birthday|$address|$image|$class";
    $newData = [];
    foreach ($students as $line) {
        $parts = explode("|", $line);
        if (count($parts) < 6) {
            $newData[] = $line; // giữ nguyên dòng lỗi
            continue;
        }

        list($sid) = $parts;
        if ($sid == $id) {
            $newData[] = $newLine;
        } else {
            $newData[] = $line;
        }
    }

    file_put_contents("../student.txt", implode("\n", $newData) . "\n");
    header("Location: ../index.php?msg=updated");

    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <style>
        form { width: 300px; }
        label { display: inline-block; width: 80px; }
        input[type="text"], input[type="file"] { width: 200px; }
    </style>
</head>
<body>
    <h2>Sửa thông tin sinh viên</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Full name:</label> 
        <input type="text" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required><br><br>
        
        <label>Birthday:</label> 
        <input type="text" name="birthday" value="<?php echo htmlspecialchars($student['birthday']); ?>" required><br><br>
        
        <label>Address:</label> 
        <input type="text" name="address" value="<?php echo htmlspecialchars($student['address']); ?>" required><br><br>
        
        <label>Image:</label> 
        <input type="file" name="image"><br>
        <img src="../uploads/<?php echo $student['image'] ?: 'no-image.png'; ?>" width="80"><br><br>
        
        <label>Class:</label> 
        <input type="text" name="class" value="<?php echo htmlspecialchars($student['class']); ?>" required><br><br>
        
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>
