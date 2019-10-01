<?php
    header("xxxx.php");
    include_once("../model/entity/learninghistory.php");
    $lines = LearningHistory::getListFilePhu("101");
    $line2 = LearningHistory::getListFromFile("101");
    if(isset($_GET["delete"])){
        $id=$_GET["delete"];
        $lines = file("../resource/learninghistory.txt",FILE_IGNORE_NEW_LINES);
        $fo = fopen("../resource/filephu.txt","w");    
     foreach ($lines as $key => $value) {
            $arr = explode("#",$value);
            if($arr[0]!=$id)
                fwrite($fo,$arr[0]."#".$arr[1]."#".$arr[2]."#".$arr[3]."#".$arr[4]."#101\n");  
        }
        fclose($fo); 
        $lines1 = file("../resource/filephu.txt",FILE_IGNORE_NEW_LINES);
        $fo2 = fopen("../resource/learninghistory.txt","w"); 
    foreach ($lines1 as $key => $value) {
            $arr1 = explode("#",$value);
                fwrite($fo2,$arr1[0]."#".$arr1[1]."#".$arr1[2]."#".$arr1[3]."#".$arr1[4]."#101\n");  
        }
        
        fclose($fo2); 
    }
    header("location: xxxx.php");
?>