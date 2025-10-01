<?php
$id = $_GET["id"] ?? null;
if (!$id) {
    die("Không có ID sinh viên!");
}

// Đọc dữ liệu
$students = file("../student.txt", FILE_IGNORE_NEW_LINES);
$newData = [];

foreach ($students as $line) {
    $parts = explode("|", $line);

    // Nếu dòng không đúng định dạng thì giữ nguyên
    if (count($parts) < 6) {
        $newData[] = $line;
        continue;
    }

    list($sid) = $parts;

    // Nếu id khác thì giữ lại, nếu đúng id thì bỏ qua (tức là xóa)
    if ($sid != $id) {
        $newData[] = $line;
    }
}

// Ghi lại file sau khi xóa
file_put_contents("../student.txt", implode("\n", $newData) . "\n");

// Quay lại index.php
header("Location: ../index.php?msg=deleted");
exit;
?>
