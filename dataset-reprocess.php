<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "food_web";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
 
// 创建数据库
$sql = "CREATE DATABASE foodfuck";
if (mysqli_query($conn, $sql)) {
    echo "mission success";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// 创建连接
$conn2 = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn2->connect_error) {
    die("connection failed:" . $conn2->connect_error);
} 
 
// 使用 sql 创建数据表USERS
$sql2 = "CREATE TABLE USERS (
username VARCHAR(30) NOT NULL,
userpass VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
 
if ($conn2->query($sql2) === TRUE) {
    echo "Table USERS created successfully";
} else {
    echo "create failed: " . $conn2->error;
}
 
mysqli_close($conn);
mysqli_close($conn2);
?>


<!--数据库初始化-->