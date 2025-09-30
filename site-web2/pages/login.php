<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit;
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }
    $stmt->close();
}
?>


<style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #f0f4f7ff, #97a7ffff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #fff;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      width: 320px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: 0.3s;
    }

    .login-container input:focus {
      border-color: #5563DE;
      box-shadow: 0 0 5px rgba(85, 99, 222, 0.5);
    }

    .login-container button {
      width: 100%;
      padding: 12px;
      background: #5563DE;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-container button:hover {
      background: #3d48b1;
    }

    .login-container p {
      margin-top: 15px;
      font-size: 14px;
    }

    .login-container a {
      color: #5563DE;
      text-decoration: none;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>

<div class="login-container">
    <h2>Đăng nhập</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="Tên đăng nhập" required>
      <input type="password" name="password" placeholder="Mật khẩu" required>
      <button type="submit">Đăng nhập</button>
    </form>
    <p>Bạn chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
  </div>
