Thông Tin Sinh Viên 
<?php
// Xử lí logic việc kiểm tra  dữ liệu và hiển thị điểm trạng thái
$empty_text = 'Để trống ';
$username= $_POST['username'];
//nếu không tồn tại $username là chuỗi rỗng thì gán =$empty_text;
if(!isset($username)|| $username===''){
    $username=$empty_text;
}
//Toán Tử 3 ngôi : nếu đúng thì gán gt sau ? , nếu sai gán gt sau : 
$msv=(isset($_POST['msv']) && $_POST['msv'] !=='')
? $_POST['msv']
: $empty_text;

$point = $_POST['point'];
$point_text='';
if(!isset($_POST['point']) || $_POST['point']=== ''){
    $point_text='Điểm không hợp lệ ';
} 
else if($point<5){
    $point_text='Học Lực yếu ';

}else if($point>=5 && $point<7){
    $point_text='Học lực TB';
}else {
    $point_text='Học lực Giỏi';
}


?>


<p>Tên Sinh Viên : <?= $_POST['username']?></p>
<p>Tên Sinh Viên : <?=$username?></p>
<p>Mã Sinh Viên : <?= $_POST['msv']?></p>
<p>Môn Học : <?= $_POST['monhoc']?></p>
<p>Điểm Số : <?= $_POST['point']?></p>
<p>Trạng Thái : <?= $_POST['status']?></p>