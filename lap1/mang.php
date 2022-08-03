<?php
// Mảng tập hợp các phần tử ko cùng kiểu dữ liệu
$a = [1,2,3];
echo 'Giá trị của phần tử ở vị trí thứ 0 trong mảng a là  $a[0];'.$a[0];
echo'<hr>';
//echo $a; không ép đc kiểu array về string để hiển thị
// Dùng var_dump để hiển thị dữ liệu
var_dump ('Giá trị của biến a: ',$a);
echo'<hr>';
$b_Lien_ket = [
    'name'=>'ngoc',//cặp key => value sẽ thể hiện vị trí và giá trị tương ứng của
    'age'=>19,
    'phone'=>'123456789'
];
echo