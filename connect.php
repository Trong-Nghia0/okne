<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dulich";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
$port = 'http://localhost:80/web_gioi_thieu_du_lich';
?>
