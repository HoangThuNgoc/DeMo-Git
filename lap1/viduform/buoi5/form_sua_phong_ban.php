<?php
//1.Đưa connect db vào 
require_once('db.php');
//2.Định nghĩa câu truy vấn 
if()
$phong_ban_id = $_GET['id'];
$sql = "SELECT * FROM phong_ban where id= $phong_ban_id";
//3.Nạp truy vấn 
$statement = $connect->prepare($sql);
//4.Thực thi
$statement->execute();
//5.Lấy dữ liệu
$phong_ban=$statement->fetch();
//sử dụng fetch để lấy ra 1 phần tử thay vì fetchall lấy
var_dump($phong_ban);
?>