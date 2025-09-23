<?php
// Gọi config kết nối DB
include __DIR__ . "/config.php";

// Số user mỗi trang
$users_per_page = 2;

// Lấy trang hiện tại từ query string, mặc định là trang 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Tính offset để truy vấn
$offset = ($page - 1) * $users_per_page;

// Lấy tổng số user
$sql_count = "SELECT COUNT(*) as total FROM users";
$result_count = $conn->query($sql_count);
$total_users = $result_count->fetch_assoc()['total'];

// Tính tổng số trang
$total_pages = ceil($total_users / $users_per_page);

// Câu SQL với LIMIT và OFFSET
$sql = "SELECT * FROM users LIMIT $users_per_page OFFSET $offset";
$result = $conn->query($sql);

// Tạo nội dung riêng
ob_start();
?>
<h2>Danh sách người dùng</h2>
<link rel="stylesheet" href="style.css">
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>Không có user nào</td></tr>";
    }
    ?>
    </tbody>
</table>

<!-- Phân trang -->
<div class="pagination">
    <?php
    // Liên kết Trang đầu
    if ($page > 1) {
        echo "<a href='?page=1'>Trang đầu</a>";
    }

    // Tính toán khoảng trang hiển thị (giới hạn 3 số)
    $range = 1; // Hiển thị 1 số trước và 1 số sau trang hiện tại
    $start = max(1, $page - $range);
    $end = min($total_pages, $page + $range);

    // Điều chỉnh để luôn hiển thị đúng 3 số nếu có thể
    if ($end - $start < 2) {
        if ($start == 1) {
            $end = min($total_pages, $start + 2);
        } else {
            $start = max(1, $end - 2);
        }
    }

    // Hiển thị các số trang
    for ($i = $start; $i <= $end; $i++) {
        if ($i == $page) {
            echo "<span class='current'>$i</span>";
        } else {
            echo "<a href='?page=$i'>$i</a>";
        }
    }

    // Liên kết Trang cuối
    if ($page < $total_pages) {
        echo "<a href='?page=$total_pages'>Trang cuối</a>";
    }
    ?>
</div>

<?php
$page_content = ob_get_clean();

// Load layout
include __DIR__ . "/../layout.php";
?>