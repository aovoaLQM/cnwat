<?php
// Định nghĩa các hàm xử lý mảng 1 chiều

function minArr($mangSo) {
    return min($mangSo);
}

function maxArr($mangSo) {
    return max($mangSo);
}

function avgArr($mangSo) {
    if (count($mangSo) == 0) return 0;
    return array_sum($mangSo) / count($mangSo);
}

function sortDay($mangSo) {
    sort($mangSo);
    return $mangSo;
}

function daoNguocDay($mangSo) {
    return array_reverse($mangSo);
}
?>
