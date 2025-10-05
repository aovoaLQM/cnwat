<?php
include(__DIR__ . "/../db.php");

$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$result = $conn->query("SELECT * FROM HOSO LIMIT $start, $limit");
$total = $conn->query("SELECT COUNT(*) as total FROM HOSO")->fetch_assoc()['total'];
$pages = ceil($total / $limit);
?>
<h2>Danh sách hồ sơ học sinh</h2>
<a href="index.php?trang=hoso&action=add">+ Thêm hồ sơ</a>
<table border="1" cellpadding="5">
<tr><th>Mã HS</th><th>Họ tên</th><th>Ngày sinh</th><th>Địa chỉ</th><th>Lớp</th><th>Điểm Toán</th><th>Điểm Lý</th><th>Điểm Hóa</th><th>Hành động</th></tr>
<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['MAHS']; ?></td>
<td><?php echo $row['HOTEN']; ?></td>
<td><?php echo $row['NGAYSINH']; ?></td>
<td><?php echo $row['DIACHI']; ?></td>
<td><?php echo $row['LOP']; ?></td>
<td><?php echo $row['DIEMTOAN']; ?></td>
<td><?php echo $row['DIEMLY']; ?></td>
<td><?php echo $row['DIEMHOA']; ?></td>
<td>

<a href="index.php?trang=hoso&action=edit&id=<?php echo $row['MAHS']; ?>">Sửa</a> |
<a href="index.php?trang=hoso&action=delete&id=<?php echo $row['MAHS']; ?>" onclick="return confirm('Xóa hồ sơ này?')">Xóa</a>
</td>
</tr>
<?php } ?>
</table>

<?php for ($i = 1; $i <= $pages; $i++): ?>
 <a href="?trang=hoso&page=<?php echo $i ; ?>"><?php echo $i; ?> </a>

<?php endfor; ?>
