<?php
include(__DIR__ . "/../db.php");

$result = $conn->query("SELECT * FROM LOP");
?>
<h2>Danh sách lớp</h2>
<a href="index.php?trang=lop&action=add">+ Thêm lớp</a>
<table border="1" cellpadding="5">
<tr><th>Mã lớp</th><th>Tên lớp</th><th>Khoá học</th><th>GVCN</th><th>Hành động</th></tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
  <td><?php echo $row['MALOP']; ?></td>
  <td><?php echo $row['TENLOP']; ?></td>
  <td><?php echo $row['KHOAHOC']; ?></td>
  <td><?php echo $row['GVCN']; ?></td>
  <td>
<a href="index.php?trang=lop&action=edit&id=<?php echo $row['MALOP']; ?>">Sửa</a> |
<a href="index.php?trang=lop&action=delete&id=<?php echo $row['MALOP']; ?>">Xóa</a>
  </td>
</tr>
<?php } ?>
</table>

