<?php
include_once "../site-web5_Array/libs/xuLyMangSo.php";

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = [];
    // Lấy 10 ô input (có thể để trống)
    for ($i = 1; $i <= 10; $i++) {
        $val = trim($_POST["num$i"] ?? "");
        if ($val !== "") { // chỉ thêm khi không rỗng
            $arr[] = (int)$val;
        }
    }

    if (count($arr) > 0) {
        $tong = array_sum($arr);
        $trungbinh = avgArr($arr);
        $min = minArr($arr);
        $max = maxArr($arr);

        $sorted = sortDay($arr);
        $reversed = daoNguocDay($arr);

        $result = "
        <p><b>Mảng nhập:</b> " . implode(", ", $arr) . "</p>
        <p><b>Tổng:</b> $tong</p>
        <p><b>Trung bình:</b> $trungbinh</p>
        <p><b>Min:</b> $min</p>
        <p><b>Max:</b> $max</p>";
    } else {
        $result = "<p style='color:red;'>Bạn chưa nhập số nào!</p>";
    }
}
?>

<h2>Thao tác trên mảng 1 chiều</h2>
<form method="post">
    <label>Nhập tối đa 10 số:</label><br><br>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        
        <input type="text" name="num<?php echo $i; ?>" 
               value="<?php echo $_POST["num$i"] ?? ""; ?>" 
               size="3">
    <?php endfor; ?>
    <br><br>
    <button type="submit">Calculate</button>
    <button type="reset">Reset</button>
</form>

<h3>Kết quả:</h3>
<div>
    <?php echo $result; ?>
</div>
