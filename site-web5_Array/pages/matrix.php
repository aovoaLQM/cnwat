<?php
include_once "../site-web5_Array/libs/xuLyMangMaTran.php";

$result = "";

$rows = 3;
$cols = 3;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matran1 = [];
    $matran2 = [];
    for ($i=0; $i<$rows; $i++) {
        for ($j=0; $j<$cols; $j++) {
            $matran1[$i][$j] = (int)($_POST["m1_{$i}_{$j}"] ?? 0);
            $matran2[$i][$j] = (int)($_POST["m2_{$i}_{$j}"] ?? 0);
        }
    }

    $tong = tinhMatranTong($matran1, $matran2);
    $hieu = tinhMatranHieu($matran1, $matran2);
    $tich = tinhMatranTich($matran1, $matran2);

    function inMaTran($m) {
        $html = "<table class='result-matrix'>";
        foreach ($m as $row) {
            $html .= "<tr>";
            foreach ($row as $val) {
                $html .= "<td>$val</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }

    $result = "
        <h3>KẾT QUẢ:</h3>
        <p><b>Ma trận Tổng:</b></p>" . inMaTran($tong) . "
        <p><b>Ma trận Hiệu:</b></p>" . inMaTran($hieu) . "
        <p><b>Ma trận Tích:</b></p>" . inMaTran($tich);
}
?>

<style>
.container { display: flex; gap: 40px; margin: 20px 0; }
table { border-collapse: collapse; margin: 10px 0; }
td { border: 1px solid #ccc; padding: 5px; text-align: center; }
input[type="number"] { width: 50px; text-align: center; }
button { padding: 6px 18px; margin: 5px; cursor: pointer; }
.result-matrix td { width: 40px; height: 30px; background: #f9f9f9; }
</style>

<h3>Sử dụng mảng để tính: hiệu, tổng, tích 2 ma trận</h3>
<form method="post">
    <div class="container">
        <div>
            <p><b>Nhập Ma trận 1</b></p>
            <table>
                <?php for ($i = 0; $i < $rows; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < $cols; $j++): ?>
                        <td>
                            <input type="number" 
                                   name="m1_<?php echo $i; ?>_<?php echo $j; ?>" 
                                   value="<?php echo $_POST["m1_{$i}_{$j}"] ?? 0; ?>">
                        </td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
            </table>
        </div>

        <div>
            <p><b>Nhập Ma trận 2</b></p>
            <table>
                <?php for ($i = 0; $i < $rows; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < $cols; $j++): ?>
                        <td>
                            <input type="number" 
                                   name="m2_<?php echo $i; ?>_<?php echo $j; ?>" 
                                   value="<?php echo $_POST["m2_{$i}_{$j}"] ?? 0; ?>">
                        </td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
            </table>
        </div>
    </div>

    <button type="reset">Nhập Lại</button>
    <button type="submit">Tính</button>
</form>

<div>
    <?php echo $result; ?>
</div>
