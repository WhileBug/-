<?php
//第一步：接收数据
 $user_name = $_GET["user_name"];
 $pass_word = $_GET["password"];

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "food_web";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
} 

$sql = "SELECT username, userpass  FROM USERS where `username`='$user_name'";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
	$arr=$result->fetch_assoc();
	if( $arr ){
			if( $pass_word == $arr["userpass"] ){ //如果用户名存在  判断密码是否相等
				echo "<script>location.href='./main_page.html';</script>";
			}else{
				echo "<script>alert('password wrong');location.href='./login.html';</script>";
			}
		}
} else {
    echo "0 result";
}
$conn->close();
?>
<!--登陆界面-->