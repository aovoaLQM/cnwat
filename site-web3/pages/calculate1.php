<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang calculate1</h2>";
?>


<?php
$result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = isset($_POST['a']) ? (int)$_POST['a'] : 0;
    $b = isset($_POST['b']) ? (int)$_POST['b'] : 0;
    $operator = $_POST['operator'] ?? '';

    switch ($operator) {
        case '+':
            $result = "$a + $b = " . ($a + $b);
            break;
        case '-':
            $result = "$a - $b = " . ($a - $b);
            break;
        case '*':
            $result = "$a * $b = " . ($a * $b);
            break;
        case '/':
            if ($b == 0) {
                $result = "Không thể chia cho 0";
            } else {
                $result = "$a / $b = " . ($a / $b);
            }
            break;
        default:
            $result = "Vui lòng chọn phép tính.";
    }
}
?>



<style>
table {
    border-collapse: collapse;
    margin: 20px 0;
}
td {
    border: 1px solid #ccc;
    padding: 8px;
}
input[type="number"] {
    width: 200px;
    padding: 5px;
}
label {
    margin-right: 10px;
}
button {
    padding: 8px 20px;
    background: #ddd;
    border: 1px solid #333;
    border-radius: 6px;
    cursor: pointer;
}
button:hover {
    background: #bbb;
}
</style>

<h3>Máy tính đơn giản</h3>
<form method="post" action="">
    <table>
        <tr>
            <td></td>
            <td><input type="number" name="a" placeholder="Nhập số a" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="number" name="b" placeholder="Nhập số b" required></td>
        </tr>
        <tr>
            <td>phép tính</td>
            <td>
                <label><input type="radio" name="operator" value="+"> + </label>
                <label><input type="radio" name="operator" value="-"> - </label>
                <label><input type="radio" name="operator" value="*"> * </label>
                <label><input type="radio" name="operator" value="/"> / </label>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Calculate</button></td>
        </tr>
    </table>
</form>



<br>
<strong>Kết quả: </strong><?php echo $result; ?>
