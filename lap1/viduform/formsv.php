<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Đăng Kí sinh viên </h1>
        <form action="tiep_nhan_sv.php"method="POST">
            <div class="form-group">
                <label for="">Tên Sinh Viên</label>
                <input type="text"class="form-control"name="username">
            </div>
            <div class="form-group">
                <label for="">Mã Sinh Viên</label>
                <input type="text"class="form-control"name="msv">
            </div>
            <div class="form-group">
                <label for="">Môn Học</label>
                <input type="text"class="form-control"name="monhoc">
            </div>
            <div class="form-group">
                <label for="">Điểm Số</label>
                <input type="number"class="form-control"name="point">
            </div>
            <div class="form-group">
                <label for="">TRạng Thái</label>
                <input type="radio"name="status"value="1">Trượt
                <input type="radio"name="status"value="0">Qua
            </div>

            <div class="form-group">
                <button class="btn btn-primary">submit</button>
            </div>
        </form>
    </div>
</body>
</html>