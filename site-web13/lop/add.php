<?php
include(__DIR__ . "/../db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $malop = $_POST["MALOP"];
    $tenlop = $_POST["TENLOP"];
    $khoahoc = $_POST["KHOAHOC"];
    $gvcn = $_POST["GVCN"];
    $conn->query("INSERT INTO LOP VALUES('$malop','$tenlop','$khoahoc','$gvcn')");
    header("Location: ../index.php?trang=lop");
exit;

}
?>
<h2>Thêm lớp mới</h2>
<form method="post">
  Mã lớp: <input name="MALOP" required><br>
  Tên lớp: <input name="TENLOP"><br>
  Khoá học: <input name="KHOAHOC" type="number"><br>
  GVCN: <input name="GVCN"><br>
  <input type="submit" value="Thêm">
</form>
