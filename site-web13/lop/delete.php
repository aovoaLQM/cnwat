<?php
include(__DIR__ . "/../db.php");

$id = $_GET['id'];
$conn->query("DELETE FROM LOP WHERE MALOP='$id'");
header("Location: ../index.php?trang=lop");
exit;

?>
