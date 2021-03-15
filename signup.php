<?php
$user_name = $_GET["user_name"];
$pass_word = $_GET["password"];

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "food_web";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} 
 
$sql = "INSERT INTO USERS (username, userpass)
VALUES ('$user_name', '$pass_word')";
 
if ($conn->query($sql) === TRUE) {
    echo "<script>window.location.href='./main_page.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>