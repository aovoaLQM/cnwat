<?php
echo "<p>Mọi page được chạy trên nền trang Index.php</p>";
echo "<h2>Trang array2</h2>";
?>

<h2>Upload nhiều file sử dụng mảng kết hợp</h2>
<p>(Bài toán: Upload 10 file, in danh sách tên 10 file và đường dẫn download file)</p>

<form method="post" action="index.php?page=uploadprocess" enctype="multipart/form-data">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "File $i: <input type='file' name='files[]'><br><br>";
    }
    ?>
    <input type="reset" value="Reset">
    <input type="submit" name="submit" value="Upload">
</form>


