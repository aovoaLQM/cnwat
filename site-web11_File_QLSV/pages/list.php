<?php
$students = file("student.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
        <th>Lớp</th>
        <th>Thao tác</th>
      </tr>";

foreach ($students as $line) {
    $parts = explode("|", $line);

    // Nếu dữ liệu chưa đủ 6 cột thì bỏ qua
    if (count($parts) < 6) {
        continue;
    }

    list($id, $name, $birthday, $address, $image, $class) = $parts;

    echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$birthday</td>
            <td>$address</td>
            <td><img src='../uploads/$image' width='50'></td>
            <td>$class</td>
            <td>
              <a href='pages/detail.php?id=$id'>Chi tiết</a> | 
              <a href='pages/edit.php?id=$id'>Sửa</a> | 
              <a href='pages/delete.php?id=$id'>Xóa</a>
            </td>
          </tr>";
}
echo "</table>";
?>
