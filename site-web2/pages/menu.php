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
  <li><a href="/hrm.abc.com.vn/site-web3/index.php">Tạo Template </a></li>


</ul>

    </ul>

</body>
</html>
