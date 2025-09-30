<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang drawTable</h2>";
?>

<h3>Trang DrawTable:</h3>

<form method="post"> 
    <div id="drawtable">
        <div>
            <label for="rows">Số dòng</label>
            <label for="cols">Số cột</label>
        </div>
        <div>
            <input type="number" id="rows" name="rows" required>
            <input type="number" id="cols" name="cols" required>
        </div>
    </div>
    <br>
    <button type="reset">Nhập Lại</button>
    <button type="submit" name="draw">Vẽ</button>
    (Khi Click nút Vẽ thì mới vẽ bảng và hiển thị bên dưới)
</form>


<?php
if (isset($_POST['draw'])) {
    $rows = intval($_POST['rows']);
    $cols = intval($_POST['cols']);

    if ($rows > 0 && $cols > 0) {
        echo "<br><table border='1' cellspacing='0' cellpadding='5'>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='color:red'>Vui lòng nhập số dòng và số cột > 0!</p>";
    }
}
?>
