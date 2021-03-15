<?php  
header("Content-type:text/html;charset=utf-8");
$host='localhost';//主机  
$user='root';//数据库账号  
$password='123456';//数据库密码  
$database='info';//数据库名  
$tablename='users';//数据库中名为listtop的表  
$con=mysqli_connect("localhost","root","123456");//连接数据库管理系统  
mysqli_select_db($con,"info");//选择操作数据库 
// echo "结果是："; 
mysqli_query($con,"SET NAMES utf8");
//设置设置UTF-8编码(JSON的唯一编码)，数据库整理为：utf8_general_ci，以此达到输出中文简体的目的  
  
/*导数据库中查询，通过$_POST*/
$name = $_POST['name'];//ajax中的data参数用同名变量接收  
$returnData=mysqli_query($con,"SELECT * FROM users");  //查询出表名为user内所有的内容
 
while($result=mysqli_fetch_assoc($returnData)){  
    $listTop_info[]=$result; //将取得的所有数据，一行两行或者三行，此例只有一行，赋值给listTop_info数组 
    // echo "结果是：",$result;   
}  
echo json_encode($listTop_info);//将listTop_info数组转换成json数组
mysqli_close($con);
$f = $_GET['f'];    
echo "document.write('".$f."');";   
?>