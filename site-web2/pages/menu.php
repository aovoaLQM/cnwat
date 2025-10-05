<!-- pages/menu.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        /* Thanh menu */
        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            display: flex;
            overflow-x: auto;    /* cho phép cuộn ngang */
            white-space: nowrap; /* giữ không xuống dòng */
        }

        .navbar::-webkit-scrollbar {
            height: 6px; /* chỉnh chiều cao scrollbar */
        }

        .navbar::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        .navbar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .navbar li {
            flex: 0 0 auto; /* không cho tự co giãn */
        }

        .navbar li a {
            display: block;
            color: white;
            text-align: center;
            padding: 12px 16px;
            text-decoration: none;
        }

        /* Hover: nền đen, chữ trắng */
        .navbar li a:hover {
            background-color: #ccc;
            color: black;
        }


    </style>
</head>
<body>

    <ul class="navbar">
<ul class="navbar">
  <li><a href="/hrm.abc.com.vn/site-web2/index.php">Tạo Template </a></li>
  <li><a href="/hrm.abc.com.vn/site-web3/index.php">4.1 Lấy và gửi dữ liệu </a></li>
  <li><a href="/hrm.abc.com.vn/site-web6_GetForm/index.php">4.2 GetForm </a></li>
  <li><a href="/hrm.abc.com.vn/site-web7_Session/index.php">4.3 Session & Cookie</a></li>
  <li><a href="/hrm.abc.com.vn/site-web5_Array/index.php">4.4 Function </a></li>
  <li><a href="/hrm.abc.com.vn/site-web11_File_QLSV/index.php">4.5 File QLSV </a></li>
  <li><a href="/hrm.abc.com.vn/site-web12_MultiLanguage/index.php">4.6 Đa ngôn ngữ </a></li>
  <li><a href="/hrm.abc.com.vn/site-web13/index.php">4.7 Kết nối và truy vấn CSDL </a></li>
</ul>

    </ul>

</body>
</html>
