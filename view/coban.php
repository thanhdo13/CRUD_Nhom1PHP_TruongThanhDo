<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
   <?php
   function dienTichHinhTron ( $bankinh){
    $s = M_PI * $bankinh;
    return $s;
}
    function dislayday(){
        $d= date("w");
            //var_dump($d);
        $dayofweek =["Sunday","Monday"];
        return $dayofweek[$d];
    }
   $a = 5;
   $b = 6;
   $rs = "Hello";
   $rs= $a +$b;
   echo "<p> Kết quả của ". $a. " và " .$b. " là ". $rs. "</p>"; 
   echo '<p>Kết quả của ' . $a. ' và ' .$b. ' là ' . $rs. "</p>"; 

   echo "<p> Kết quả của  $a và $b là $rs </p>";
   echo '<p> Kết quả của  $a và $b là $rs </p>';
   define("PI",3.14);
   $r = 5;
   $s = M_PI * $r;
   echo "<p>Diện tích hình tròn có bán kính $r là $s </p>";
  function sum($n){
      $s =0;
    for($i=1; $i<= $n;$i++){
        $s=$s+$i;
    }
    return $s;
  }
  $r=5;
  $tong=sum($r);
  echo "<p>Tổng từ 1 đến $r là $tong </p>";
  echo "<p>hôm nay là " .dislayday();
   ?>
</body>
</html>