<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang array1</h2>";
?>



<?php
$sum = $diff = $prod = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tinh'])) {
    // Lấy dữ liệu ma trận
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];

    $rows = count($m1);
    $cols = count($m1[0]);

    // Cộng và trừ
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $sum[$i][$j]  = $m1[$i][$j] + $m2[$i][$j];
            $diff[$i][$j] = $m1[$i][$j] - $m2[$i][$j];
        }
    }

    // Nhân ma trận
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $prod[$i][$j] = 0;
            for ($k = 0; $k < $cols; $k++) {
                $prod[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
            }
        }
    }
}
?>

<style>
.container { display: flex; gap: 40px; margin: 15px 0; }
table { border-collapse: collapse; margin: 10px 0; }
td { border: 1px solid #ccc; padding: 5px; text-align: center; }
input[type="number"] { width: 50px; text-align: center; }
button { padding: 5px 15px; margin: 5px; }
</style>

<h3>Sử dụng mảng để tính: hiệu, tổng, tích 2 ma trận</h3>
<form method="post">
    <div class="container">
        <div>
            <p><b>Nhập Ma trận 1</b></p>
            <table>
                <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td><input type="number" name="m1[<?php echo $i; ?>][<?php echo $j; ?>]" value="0"></td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
            </table>
        </div>

        <div>
            <p><b>Nhập Ma trận 2</b></p>
            <table>
                <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td><input type="number" name="m2[<?php echo $i; ?>][<?php echo $j; ?>]" value="0"></td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
            </table>
        </div>
    </div>

    <button type="reset">Nhập Lại</button>
    <button type="submit" name="tinh">Tính</button>
</form>

<?php if (!empty($sum)): ?>
    <h4>KẾT QUẢ:</h4>

    <p>Ma trận Tổng:</p>
    <table>
        <?php foreach ($sum as $row): ?>
        <tr>
            <?php foreach ($row as $val): ?>
                <td><?php echo $val; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <p>Ma trận Hiệu:</p>
    <table>
        <?php foreach ($diff as $row): ?>
        <tr>
            <?php foreach ($row as $val): ?>
                <td><?php echo $val; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <p>Ma trận Tích:</p>
    <table>
        <?php foreach ($prod as $row): ?>
        <tr>
            <?php foreach ($row as $val): ?>
                <td><?php echo $val; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
