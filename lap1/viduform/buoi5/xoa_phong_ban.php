<?php
//1.Đưa connnect từ file db.php vào
require_once('db.php');
//2.Nhận đc id từ đường dẫn bấm nút xóa
//xóa phong ban .php
$phong_ban_id= $_GET['id'];
//3.Tạo câu truy vấn 
$sql='delete from phong_ban where id='.$phong_ban_id;
$sql="delete from phong_ban where id=$phong_ban_id";
//4.nạp câu truy vấn 
$statement = $connect->prepare($sql);
//5.thực hiện 
$statement->exeute();
//6.quay về trang mong muốn 
header('location:phong_ban.php');