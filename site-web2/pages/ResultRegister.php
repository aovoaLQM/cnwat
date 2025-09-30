<?php
if (isset($_POST['dangky'])) {
    $ten = htmlspecialchars($_POST['ten']);
    $diachi = htmlspecialchars($_POST['diachi']);
    $nghe = htmlspecialchars($_POST['nghe']);
    $ghichu = htmlspecialchars($_POST['ghichu']);

    echo "<h2>Kết quả đăng ký</h2>";
    echo "<p><b>Tên:</b> $ten</p>";
    echo "<p><b>Địa chỉ:</b> $diachi</p>";
    echo "<p><b>Nghề:</b> $nghe</p>";
    echo "<p><b>Ghi chú:</b> $ghichu</p>";
} else {
    echo "<p>Chưa có dữ liệu đăng ký.</p>";
}
?>
