<?php
//1.Khởi tạo kết nối 
//$connect = new PDO(
   // 'mysql:host=127.0.0.1;dbname=php1_web2014;',
//'root',//username
//''//password

//); 
//Khởi tạo kết nối từ file db.php sau đó nhúng vào đây 
repuire_once('db.php');
//2.THực hiện viết truy vấn sql
$sql='select * from nhan_vien';
//3.nạp câu truy vấn vào kết nối 
$statement = $connect->prepare($sql);
//4.THực hiện câu truy vấn 
$statement->execute();
//5.Nhận kết quả 
$nhan_vien = $statement->fetchAll();
var_dump($nhan_vien);
?>
<table border='1'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<count($nhan_vien);$i++){
            ?>
            <tr>
                <td><?=$nhan_vien[$i]['id']?></td>
                <td><?=$nhan_vien[$i]['ten']?></td>
            </tr>
            <?php 
        }?>
        
    </tbody>
</table>