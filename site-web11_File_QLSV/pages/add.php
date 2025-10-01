<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $class = $_POST["class"];

    $image = "";
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $uploadDir = "../uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $image = basename($_FILES["image"]["name"]);
        $target = $uploadDir . $image;

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
            echo "Upload thất bại!";
            $image = ""; // nếu lỗi thì để rỗng
        }
    }

    // Sinh STT (dựa vào số dòng trong file)
    $lines = file("student.txt", FILE_IGNORE_NEW_LINES);
    $id = count($lines) + 1;

    // Ghi vào file
    $line = "$id|$name|$birthday|$address|$image|$class\n";
    file_put_contents("student.txt", $line, FILE_APPEND);

    header("Location: list.php?msg=success");
exit;
    
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Add Student</title>
  <style>
    form {
      width: 300px;
      margin: 20px auto;
      font-family: Arial, sans-serif;
    }

    label {
      display: inline-block;
      width: 80px;
      margin-bottom: 8px;
    }

    input[type="text"],
    input[type="date"],
    input[type="file"] {
      width: 200px;
      padding: 4px;
    }

    input[type="submit"] {
      margin-top: 10px;
      padding: 6px 12px;
      border: none;
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      border-radius: 4px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2 style="text-align:center;">Thêm sinh viên mới</h2>
  <form method="POST" enctype="multipart/form-data">
    <div>
      <label for="name">Full name:</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div>
      <label for="birthday">Birthday:</label>
      <input type="date" id="birthday" name="birthday" required>
    </div>

    <div>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required>
    </div>

    <div>
      <label for="image">Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>
    </div>

    <div>
      <label for="class">Class:</label>
      <input type="text" id="class" name="class" required>
    </div>

    <div style="text-align:center;">
      <input type="submit" value="Lưu">
    </div>
  </form>
</body>
</html>
