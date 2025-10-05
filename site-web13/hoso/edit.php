<?php
include(__DIR__ . "/../db.php");

$MAHS = $_GET['id'];
$sql = "SELECT * FROM HOSO WHERE MAHS='$MAHS'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (!$row) {
    die("Không tìm thấy học sinh có mã $MAHS");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $HOTEN = $_POST["HOTEN"];
    $NGAYSINH = $_POST["NGAYSINH"];
    $DIACHI = $_POST["DIACHI"];
    $LOP = $_POST["LOP"];
    $DIEMTOAN = $_POST["DIEMTOAN"];
    $DIEMLY = $_POST["DIEMLY"];
    $DIEMHOA = $_POST["DIEMHOA"];

    $sql_update = "UPDATE HOSO 
                   SET HOTEN='$HOTEN', NGAYSINH='$NGAYSINH', DIACHI='$DIACHI', LOP='$LOP',
                       DIEMTOAN='$DIEMTOAN', DIEMLY='$DIEMLY', DIEMHOA='$DIEMHOA'
                   WHERE MAHS='$MAHS'";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: ../index.php?trang=hoso");
        exit;

    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<h2>Sửa hồ sơ học sinh</h2>
<form method="post">
  <label>Mã HS:</label> <input value="<?php echo $row['MAHS']; ?>" disabled><br><br>
  <label>Họ tên:</label> <input name="HOTEN" value="<?php echo $row['HOTEN']; ?>"><br><br>
  <label>Ngày sinh:</label> <input type="date" name="NGAYSINH" value="<?php echo $row['NGAYSINH']; ?>"><br><br>
  <label>Địa chỉ:</label> <input name="DIACHI" value="<?php echo $row['DIACHI']; ?>"><br><br>
  <label>Lớp:</label> <input name="LOP" value="<?php echo $row['LOP']; ?>"><br><br>
  <label>Điểm Toán:</label> <input name="DIEMTOAN" type="number" step="0.1" value="<?php echo $row['DIEMTOAN']; ?>"><br><br>
  <label>Điểm Lý:</label> <input name="DIEMLY" type="number" step="0.1" value="<?php echo $row['DIEMLY']; ?>"><br><br>
  <label>Điểm Hóa:</label> <input name="DIEMHOA" type="number" step="0.1" value="<?php echo $row['DIEMHOA']; ?>"><br><br>
  <input type="submit" value="Cập nhật hồ sơ">
</form>
<a href="list.php">← Quay lại danh sách</a>
