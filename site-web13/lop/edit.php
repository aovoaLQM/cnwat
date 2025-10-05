<?php
include(__DIR__ . "/../db.php");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM LOP WHERE MALOP='$id'");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenlop = $_POST["TENLOP"];
    $khoahoc = $_POST["KHOAHOC"];
    $gvcn = $_POST["GVCN"];
    $conn->query("UPDATE LOP SET TENLOP='$tenlop', KHOAHOC='$khoahoc', GVCN='$gvcn' WHERE MALOP='$id'");
header("Location: ../index.php?trang=lop");
exit;

}
?>
<h2>Sửa lớp</h2>
<form method="post">
  Tên lớp: <input name="TENLOP" value="<?php echo $row['TENLOP']; ?>"><br>
  Khoá học: <input name="KHOAHOC" value="<?php echo $row['KHOAHOC']; ?>"><br>
  GVCN: <input name="GVCN" value="<?php echo $row['GVCN']; ?>"><br>
  <input type="submit" value="Cập nhật">
</form>
