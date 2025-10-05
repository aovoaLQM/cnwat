<?php
include(__DIR__ . "/../db.php");


$MAHS = $_GET['id'];
if (!$MAHS) {
    die("Thiếu mã học sinh!");
}

$sql = "DELETE FROM HOSO WHERE MAHS='$MAHS'";

if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?trang=hoso");
        exit;

} else {
    echo "Lỗi khi xóa: " . $conn->error;
}
?>
