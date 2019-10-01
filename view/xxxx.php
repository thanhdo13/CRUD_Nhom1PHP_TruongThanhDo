<?php
include_once("header.php");
include_once("nav2.php");
include_once("../model/entity/learninghistory.php");
$rs = LearningHistory::getList("1");
$lines = LearningHistory::getListFromFile("101");

//var_dump($lines);
?>
<div id="content-wrapper">
    <div class="container-fluid">
       <h2> Quá trình học tập:</h2>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Thêm </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
          <form action="xxxx.php" method="post">
            <table>
           <tr><td>Từ Năm  :</td> <td> <input type="text" name="txt1" value="" placeholder="từ năm"> </td></tr><br>
           <tr><td>Đến Năm :</td> <td> <input type="text" name="txt2" value="" placeholder="đến năm"> </td></tr><br>
           <tr><td>Lớp     :</td> <td> <input type="text" name="txt3" value="" placeholder="lớp"> </td></tr><br>
           <tr><td>Nơi học :</td> <td>  <input type="text" name="txt4" value="" placeholder="nơi học"> </td></tr><br>
          </table>
          <button type="submit" value="submit" name="submit" > Save  </button>
          </form>
      </div>
    </div>
  </div>
</div>
   <div class="d-flex flex-row-reverse">
     <button class="btn btn-default btn-rounded btn-primary mb-4" data-toggle="modal" data-target="#modalLoginForm"  name="Thêm"> <i class="fas fa-plus-square"></i>Thêm </button>
    </div> 
    <table class="table">
  <thead class="">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Từ Năm</th>
      <th scope="col">Đến Năm</th>
      <th scope="col">Cấp</th>
      <th scope="col">Nơi học</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    $h=0;
    foreach ($lines as $key => $value) {
      echo "<tr>";
      echo "<th scope='row'>$key</th>";
      echo "<td>$value->yearFrom</td>";
      echo "<td>$value->yearTo</td>";
      echo "<td>$value->schoolName</td>";
      echo "<td>$value->schoolAddress</td>";
      echo "<td><a href='xxxx.php?edit=$value->id'";
      echo  "class='btn btn-info'><i class='fas fa-edit'></i>Edit</a>";
      echo  "<a href='xoa.php?delete=$value->id'";
      echo  "class='btn btn-danger'><i class='fas fa-trash-alt'></i>Delete</a></td></tr>";
      $i=$value->id;
      $h=$key;
    }
    
    if(isset($_POST["submit"])){
      $num1 = $_POST["txt1"];
      $num2 = $_POST["txt2"];
      $num3 = $_POST["txt3"];
      $num4 = $_POST["txt4"];
      $i=$i+1;
      $mofile = fopen("../resource/LearningHistory.txt","a");
      fwrite($mofile,$i."#".$num1."#".$num2."#".$num3."#".$num4."#101\n");
      echo "thêm thành công!";
      fclose($mofile);
   // require("xxxx.php");nút thêm
   $h=$h+1;
      echo "<tr>";
        echo "<th scope='row'>$h</th>";
        echo "<td>$num1</td>";
        echo "<td>$num2</td>";
        echo "<td>$num3</td>";
        echo "<td>$num4</td>";
        echo "<td><a href='xxxx.php?edit=$i'";
        echo  "class='btn btn-info'><i class='fas fa-edit'></i>Edit</a>";
        echo  "<a href='xoa.php?delete=$i'";
        echo  "class='btn btn-danger'><i class='fas fa-trash-alt'></i>Delete</a></td></tr>";
      }
      //nút xóa
      //function 
      //nút edit
    
      if(isset($_GET["edit"])){
        $edit=$_GET["edit"];
        $lines2 = file("../resource/learninghistory.txt",FILE_IGNORE_NEW_LINES);
        foreach ($lines2 as $key => $value) {
          $arr2 = explode("#",$value);
            if($arr2[0]==$edit){
              echo"<form action='edit.php?edit=$edit' method='post'>";
              echo" <table>";
              echo" <tr><td>Từ Năm  :</td> <td> <input type='text' name='txt5' value='$arr2[1]' placeholder='từ năm'> </td></tr><br>";
              echo"<tr><td>Đến Năm :</td> <td> <input type='text' name='txt6' value='$arr2[2]' placeholder='đến năm'> </td></tr><br>";
              echo"<tr><td>Lớp     :</td> <td> <input type='text' name='txt7' value='$arr2[3]' placeholder='lớp'> </td></tr><br>";
              echo" <tr><td>Nơi học :</td> <td>  <input type='text' name='txt8' value='$arr2[4]' placeholder='nơi học'> </td></tr><br>";
              echo"</table>";
              echo" <button type='submit2' value='submit2' name='submit2' > Save  </button>";
              echo" </form>";
            }
        }
      }
    ?>
  </tbody>
</table>
</div>
</div>  
<?php
include_once("footer.php"); ?>
