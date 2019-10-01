<?php
header("xxxx.php");
include_once("../model/entity/learninghistory.php");
$lines = LearningHistory::getListFilePhu("101");
$line2 = LearningHistory::getListFromFile("101");
    if(isset($_GET["edit"])&&isset($_POST["submit2"])){ 
        $id=$_GET["edit"];
        $lines2 = file("../resource/learninghistory.txt",FILE_IGNORE_NEW_LINES);
        $fo = fopen("../resource/filephu.txt","w");  
        $num5 = $_POST["txt5"];
        $num6 = $_POST["txt6"];
        $num7 = $_POST["txt7"];
        $num8 = $_POST["txt8"];  
     foreach ($lines2 as $key => $value) {
            $arr2 = explode("#",$value);
            if($arr2[0]!=$id)
                fwrite($fo,$arr2[0]."#".$arr2[1]."#".$arr2[2]."#".$arr2[3]."#".$arr2[4]."#101\n");  
            else{
                fwrite($fo,$id."#".$num5."#".$num6."#".$num7."#".$num8."#101\n");
            }
        }
        fclose($fo);
        $lines1 = file("../resource/filephu.txt",FILE_IGNORE_NEW_LINES);
        $fo2 = fopen("../resource/learninghistory.txt","w"); 
    foreach ($lines1 as $key => $value) {
            $arr1 = explode("#",$value);
                fwrite($fo2,$arr1[0]."#".$arr1[1]."#".$arr1[2]."#".$arr1[3]."#".$arr1[4]."#101\n");  
        }
        fclose($fo2); 

 // require("xxxx.php");nút thêm
  } 
  header("location: xxxx.php");
?>