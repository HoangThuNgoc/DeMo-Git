<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <h1>Form login</h1>
        <!--action : nơi tiếp nhận yêu cầu gửi đi -->
        <!--nethod : Phương thức gửi yêu cầu -->
        <!--type submit : Để khi bấm sẽ gửi yêu cầu đi-->
        <!--GET: dữ liệu nguwofi dùng gửi lên sẽ đc đẩy vào url
        người dùng ?name1=gia-tri1$name2=gia-tri2 nhận dc qua $_GET-->
        <!-- Chú ý : Phải có thuộc tính name trong input-->


        <form action="tiep-nhan-yeu-cau.php"method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text"class="form-control"name="username">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password"class="form-control"name="pwd">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">login</button>
            </div>
        </form>
    </div>
    
</body>
</html>