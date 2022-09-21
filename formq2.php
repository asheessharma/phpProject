<?php
    $str1=$_POST['String'];
    $arr=str_split($str1,3);
    //$arr1=implode($arr);
   // print_r($arr);
    foreach($arr as $i){
        echo($i);
        echo ("  ");
    }

?>