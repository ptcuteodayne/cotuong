<?php
$servername = "127.0.0.1:3306"; // Tên máy chủ MySQL (thường là localhost)
$username = "root"; // Tên người dùng MySQL
$password = "123456"; // Mật khẩu người dùng MySQL
$dbname = "dangky"; // Tên cơ sở dữ liệu MySQL

// Kết nối tới cơ sở dữ liệu
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

echo "Kết nối thành công!";
?>
{
  header("Location: login.html");
    exit;
  $conn->close();
}
?>