<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang Calculate2</h2>";
?>
<?php
$tong = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ok'])) {
    $m1 = (float)$_POST['m1'];
    $m2 = (float)$_POST['m2'];
    $m3 = (float)$_POST['m3'];
    $tong = $m1 + $m2 + $m3;
}

?>


<style>
table {
    border-collapse: collapse;
    margin: 20px 0;
}
td {
    border: 1px solid #ccc;
    padding: 6px 10px;
}
input[type="text"], input[type="number"] {
    width: 200px;
    padding: 5px;
}
button {
    padding: 5px 15px;
    margin-right: 10px;
    border: 1px solid #333;
    border-radius: 3px;
    cursor: pointer;
}
button:hover {
    background: #ddd;
}
</style>

<h3>Form nhập điểm</h3>
<form method="post" action="">
    <table>
        <tr>
            <td>Ho va ten</td>
            <td><input type="text" name="hoten" required></td>
        </tr>
        <tr>
            <td>Lop</td>
            <td><input type="text" name="lop" required></td>
        </tr>
        <tr>
            <td>Diem M1</td>
            <td><input type="number" name="m1" step="0.1" required></td>
        </tr>
        <tr>
            <td>Diem M2</td>
            <td><input type="number" name="m2" step="0.1" required></td>
        </tr>
        <tr>
            <td>Diem M3</td>
            <td><input type="number" name="m3" step="0.1" required></td>
        </tr>
        <tr>
            <td>Tong diem</td>
            <td><input type="text" name="tong" value="<?php echo $tong; ?>" readonly></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="ok">OK</button>
                <button type="reset">Cancel</button>
            </td>
        </tr>
    </table>
</form>
