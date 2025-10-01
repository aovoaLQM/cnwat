<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Thông tin cá nhân</title>
  <style>
    /* Layout chính */
    .container {
      display: flex;
      align-items: stretch;
      /* ép 2 cột bằng chiều cao nhau */
      max-height: 300px;
    }

    /* Cột logo bên trái */
    #logo {
      flex: 2;
      display: flex;
      flex-direction: column;
      height: 300px;
    }

    #logo h3 {
      background: #f0f0f0;
      margin: 0;
      flex: 2;
      height: min-content;
    }

    #logo #avatar {
      width: 100%;
      height: 10px;
      /* avatar cố định 200px */
      object-fit: cover;
      /* cắt ảnh gọn, không méo */
      flex: 8;
    }

    /* Cột banner bên phải */
    #banner {
      flex: 8;
      display: flex;
    }

    #banner img {
      width: 100%;
      height: auto;
      /* cao = cột logo */
      object-fit: cover;
      display: block;
    }

    /* Phần giữa */
    #middle {
      display: flex;
      gap: 20px;
      margin-top: 20px;
    }

    #left {
      flex: 2;
      background: #f9f9f9;
      padding: 10px;
    }

    #center {
      flex: 8;
      padding: 10px;
    }

    /* Phần cuối */
    #bottom {
      margin-top: 20px;
      padding: 10px;
      background: #eee;
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- Phần trên: logo + banner -->
  <div class="container">
    <div id="logo">
      <h3>
        Họ tên: Lê Anh Đức <br>
        Mã sinh viên: AT190313 <br>
      </h3>
      <img id="avatar" src="https://www.w3schools.com/html/img_girl.jpg" alt="Avatar">
    </div>

    <div id="banner">
        <img src="../site-web2/img/ho_chi_minh_1.jpg" alt="Banner">
        <img src="../../site-web2/img/ho_chi_minh_1.jpg" alt="Banner">

    </div>
  </div>


</body>

</html>