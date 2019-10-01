<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>Nav</title>
</head>
<body>
<?php
    include_once("../model/entity/student.php");
    $maSinhVien = $ho = $ten = $ngaySinh = $email ="";
    //var_dump($_SERVER);
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $maSinhVien=$_REQUEST["txtMaSinhVien"];
        $ho=$_REQUEST["txtHo"];
        $ten=$_REQUEST["txtTen"];
        $ngaySinh=$_REQUEST["txtNgaySinh"];
        $email=$_REQUEST["txtEmail"];
        $student = new Student($ho,$ten,$ngaySinh,$email);
        $student ->fisrtName =$ho;
        $student ->lastName = $ten;
        $student ->dateOfBirth=$ngaySinh;
        $student->display();
      //  var_dump($_FILES);
    //var_dump($ho);
    // if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     echo '<h3> giỏi </h3>';
    // }
    // else echo '<h3> sai </h3>';
    if($_FILES["fileAnhDaiDien"]["name"] != ""){
        move_uploaded_file($_FILES["fileAnhDaiDien"]["tmp_name"],"uploads/avatar.jpg");
    }
    else echo "k thành công";
    
    }
 ?>
    <form method="post" enctype="multipart/form-data" >
    <div class="formEnterData" >
    <div>
        <label for="" >Ảnh đại diện: </label>
    </div>
    <div>
        <input type="file" name="fileAnhDaiDien" value=""  >    
    </div>
    <div>
        <label for="" > Mã Sinh Viên: </label>
    </div>
    <div>
        <input type="text" name="txtMaSinhVien" value="<?php echo $maSinhVien; ?>" required >    
    </div>
    <div>
        <label for="" >Họ: </label>
    </div>
    <div>
        <input type="text" name="txtHo" value="<?php echo $ho; ?>" required>    
    </div>
    <div>
        <label for="" >Tên: </label>
    </div>
    <div>
        <input type="text" name="txtTen" value="<?php echo $ten; ?>" required>    
    </div>
    <div>
        <label for="" >Ngày Sinh: </label>
    </div>
    <div>
        <input type="date" name="txtNgaySinh" value="<?php echo $ngaySinh; ?>" required>    
    </div>
    <div>
        <label for="" >Email: </label>
    </div>
    <div>
        <input type="email" name="txtEmail" value="<?php echo $email; ?>" required>    
    </div>
    <div>
    </div>
    <div>
        <input type="submit" name="submit" value="Lưu" >    
    </div>
    </div>
    </form>
</body>
</html>