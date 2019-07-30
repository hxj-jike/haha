<?php
header("Content-Type:text/html;charset=UTF-8");
//连接数据库
include 'conn.php';
$username = isset($_POST['username'])?$_POST['username']: '';
$password = isset($_POST['password'])?$_POST['password']: '';
$phone = isset($_POST['phone'])?$_POST['phone']: '';
$email = isset($_POST['email'])?$_POST['email']: '';
//sql语句
$sql = "INSERT INTO user (username,password,phone,email) VALUES('$username','$password','$phone','$email')";
//执行语句
$res = $conn->query($sql);
if($res){
    echo "yes";//插入成功
}else{
    echo'no';//插入失败

}
// $res->close();
// $conn->close();
?>