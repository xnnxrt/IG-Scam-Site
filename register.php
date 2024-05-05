<?php
// เชื่อมต่อกับ MySQL Database
$servername = "sql6.freemysqlhosting.net"; // เปลี่ยนเป็นชื่อเซิร์ฟเวอร์ MySQL ของคุณ
$username = "sql6704241"; // เปลี่ยนเป็นชื่อผู้ใช้ MySQL
$password = "ftiM7uwGw3"; // เปลี่ยนเป็นรหัสผ่าน MySQL
$dbname = "sql6704241"; // เปลี่ยนเป็นชื่อฐานข้อมูลที่คุณสร้าง

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// รับข้อมูลจากฟอร์ม Register
$username = $_POST['username'];
$password = $_POST['password'];

// เพิ่มข้อมูลในฐานข้อมูล
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";


if ($conn->query($sql) === TRUE) {
    header("Location: https://www.serenely.day/");
    exit();
} else {
    echo "เกิดข้อผิดพลาดในการลงทะเบียน: " . $conn->error;
}

$conn->close();
?>