<?php
include(__DIR__ . "/../db.php");

// Khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MAHS = $_POST["MAHS"];
    $HOTEN = $_POST["HOTEN"];
    $NGAYSINH = $_POST["NGAYSINH"];
    $DIACHI = $_POST["DIACHI"];
    $LOP = $_POST["LOP"];
    $DIEMTOAN = $_POST["DIEMTOAN"];
    $DIEMLY = $_POST["DIEMLY"];
    $DIEMHOA = $_POST["DIEMHOA"];

    // Câu lệnh INSERT
    $sql = "INSERT INTO HOSO (MAHS, HOTEN, NGAYSINH, DIACHI, LOP, DIEMTOAN, DIEMLY, DIEMHOA)
            VALUES ('$MAHS', '$HOTEN', '$NGAYSINH', '$DIACHI', '$LOP', '$DIEMTOAN', '$DIEMLY', '$DIEMHOA')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?trang=hoso");
        exit;

    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<h2>Thêm hồ sơ học sinh</h2>
<form method="post">
  <label>Mã HS:</label> <input name="MAHS" required><br><br>
  <label>Họ tên:</label> <input name="HOTEN"><br><br>
  <label>Ngày sinh:</label> <input type="date" name="NGAYSINH"><br><br>
  <label>Địa chỉ:</label> <input name="DIACHI"><br><br>
  <label>Lớp:</label> <input name="LOP"><br><br>
  <label>Điểm Toán:</label> <input name="DIEMTOAN" type="number" step="0.1"><br><br>
  <label>Điểm Lý:</label> <input name="DIEMLY" type="number" step="0.1"><br><br>
  <label>Điểm Hóa:</label> <input name="DIEMHOA" type="number" step="0.1"><br><br>
  <input type="submit" value="Thêm hồ sơ">
</form>
<a href="list.php">← Quay lại danh sách</a>
