<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tạo form</title>
</head>
<body>
    <form accept="index2.php" method="get">
        <input type="text" name="num1" value="<?php echo $_REQUEST["num1"]?>" placeholder="Nhập a">
        <input type="text" name="num2" value="<?php echo $_REQUEST["num2"]?>" placeholder="Nhập b">
        <select name="operator">
        <option value="none">Vui lòng chọn phép tính </option>
            <option <?php echo $_REQUEST["operator"]=="add" ? "selected": "";?> value="add">Cộng</option>
            <option <?php echo $_REQUEST["operator"]=="substract" ? "selected": "";?> value="substract">Trừ</option>
            <option <?php echo $_REQUEST["operator"]=="multiply" ? "selected": "";?> value="multiply">Nhân</option>
            <option <?php echo $_REQUEST["operator"]=="divide" ? "selected": "";?> value="divide">Chia</option>
        </select>
        <button type="submit" value="submit" name="submit" > Tính  </button>
        <output > </output>
    </form>
    <?php
     if(isset($_GET["submit"])){
         $num1 = $_GET["num1"];
         $num2 = $_GET["num2"];
         $operator =$_GET["operator"];
         $rs=0;
         switch ($operator){
             case 'add';
             $rs= $num1+$num2;
             break;
             case 'substract';
             $rs= $num1-$num2;
             break;
             case 'multiply';
             $rs= $num1*$num2;
             break;
             case 'divide';
             $rs= $num1/$num2;
             break;
             default:
             echo "vui lòng chọn phép tính";
         }
         echo "ket qua là :" .$rs;
     }
     ?>
</body>
</html>