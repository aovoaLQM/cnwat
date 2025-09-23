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
  <li><a href="/hrm.abc.com.vn/example.html">1.1 Ví dụ mẫu</a></li>
  <li><a href="/hrm.abc.com.vn/information.html">1.2 Giới thiệu bản thân</a></li>
  <li><a href="/hrm.abc.com.vn/Score.html">1.3 Bảng điểm</a></li>
  <li><a href="/hrm.abc.com.vn/Curriculum_vitae.html">1.4 Lí lịch</a></li>
  <li><a href="2_1exampleJS.html">2.1 Ví dụ</a></li>
  <li><a href="2_2Thitracnghiem.html">2.2 Thi trắc nghiệm</a></li>
  <li><a href="2_3Formlop.html">2.3 Form lớp</a></li>
  <li><a href="2_4Formhoso.html">2.4 Form hồ sơ</a></li>
  <li><a href="2_5Formnhap.html">2.5 Form nhập</a></li>
  <li><a href="2_6nhan-su/index.html">2.6 Danh sách</a></li>
</ul>

    </ul>

</body>
</html>
