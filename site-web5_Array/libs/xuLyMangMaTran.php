<?php
// Định nghĩa các hàm xử lý ma trận

function maxMatran($mang2Chieu) {
    $max = $mang2Chieu[0][0];
    foreach ($mang2Chieu as $row) {
        foreach ($row as $val) {
            if ($val > $max) $max = $val;
        }
    }
    return $max;
}

function minMatran($mang2Chieu) {
    $min = $mang2Chieu[0][0];
    foreach ($mang2Chieu as $row) {
        foreach ($row as $val) {
            if ($val < $min) $min = $val;
        }
    }
    return $min;
}

function tongTrenCheoChinh($mang2Chieu) {
    $tong = 0;
    for ($i=0; $i<count($mang2Chieu); $i++) {
        $tong += $mang2Chieu[$i][$i];
    }
    return $tong;
}

function tongTrenCheoPhu($mang2Chieu) {
    $tong = 0;
    $n = count($mang2Chieu);
    for ($i=0; $i<$n; $i++) {
        $tong += $mang2Chieu[$i][$n-$i-1];
    }
    return $tong;
}

function tinhMatranTong($matran1, $matran2) {
    $rows = count($matran1);
    $cols = count($matran1[0]);
    $res = [];
    for ($i=0; $i<$rows; $i++) {
        for ($j=0; $j<$cols; $j++) {
            $res[$i][$j] = $matran1[$i][$j] + $matran2[$i][$j];
        }
    }
    return $res;
}

function tinhMatranTich($matran1, $matran2) {
    $rows1 = count($matran1);
    $cols1 = count($matran1[0]);
    $cols2 = count($matran2[0]);
    $res = [];

    for ($i=0; $i<$rows1; $i++) {
        for ($j=0; $j<$cols2; $j++) {
            $res[$i][$j] = 0;
            for ($k=0; $k<$cols1; $k++) {
                $res[$i][$j] += $matran1[$i][$k] * $matran2[$k][$j];
            }
        }
    }
    return $res;
}

function tinhMatranHieu($matran1, $matran2) {
    $rows = count($matran1);
    $cols = count($matran1[0]);
    $res = [];
    for ($i=0; $i<$rows; $i++) {
        for ($j=0; $j<$cols; $j++) {
            $res[$i][$j] = $matran1[$i][$j] - $matran2[$i][$j];
        }
    }
    return $res;
}

?>
