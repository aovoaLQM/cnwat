<?php
// Vẽ bảng HTML
function VeBang() {
    echo "
    <table width='500px' border='1' height='100px' bgcolor='gray'>
        <tr><td>aaa</td><td>bb</td></tr>
        <tr><td>aaa</td><td>bb</td></tr>
        <tr><td>aaa</td><td>bb</td></tr>
    </table>
    ";
}

// Hàm tìm max của 2 số
function Max2($a, $b) {
    return ($a > $b) ? $a : $b;
}

// Hàm kiểm tra đăng nhập
function CheckLogin($username, $password) {
    $hashPass = md5($password);
    $hashPassDung = md5("admin");

    if ($username == "admin" && $hashPass == $hashPassDung) {
        return true;
    } else {
        return false;
    }
}

// Hàm tính tổng mảng (cách 1: dùng for)
function TongDay1($mangSo) {
    $sum = 0;
    for ($i = 0; $i < count($mangSo); $i++) {
        $sum += $mangSo[$i];
    }
    return $sum;
}

// Hàm tính tổng mảng (cách 2: dùng foreach)
function TongDay2($mangSo) {
    $sum = 0;
    foreach ($mangSo as $item) {
        $sum += $item;
    }
    return $sum;
}
?>
