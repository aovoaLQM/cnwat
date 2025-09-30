<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang Loop</h2>";

?>


<h3>Trang Loop</h3>
<p>In kết quả dưới theo 3 cách: For, While, Do-While</p>

<?php
$rows = 10; // số dòng in ra

// --- Cách 1: FOR ---
echo "<h4>Cách 1: For</h4>";
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
/*
// --- Cách 2: WHILE ---
echo "<h4>Cách 2: While</h4>";
$i = 1;
while ($i <= $rows) {
    $j = 1;
    while ($j <= $i) {
        echo "* ";
        $j++;
    }
    echo "<br>";
    $i++;
}

// --- Cách 3: DO-WHILE ---
echo "<h4>Cách 3: Do-While</h4>";
$i = 1;
do {
    $j = 1;
    do {
        echo "* ";
        $j++;
    } while ($j <= $i);
    echo "<br>";
    $i++;
} while ($i <= $rows);

*/
?>
