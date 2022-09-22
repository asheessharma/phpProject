<?php
    $num1=$_POST['Num1'];
    $num2=$_POST['Num2'];
    $operation=$_POST['operation'];
    if($operation=='+'){
        echo $num1+$num2;
    }
    else if($operation=='-'){
        echo $num1-$num2;
    }
    else if($operation=='*'){
        echo $num1*$num2;
    }
    else if($operation=='/'){
        echo ($num1/$num2);
    }
    else{
        echo ($num1 % $num2);
    }




 ?>