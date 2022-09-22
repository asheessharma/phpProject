<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function reverse($num1){
        $sum=0;
        while($num1>0){
            $sum=($sum*10)+($num1%10);
            $num1=(int)($num1/10);
        }
        return $sum;
    }

    function square($num){
        return $num*$num;
    }
    function checkAdam($Num1){
        $a=square($Num1);
        $b=square(reverse($Num1));
        if($a==reverse($b))
           return 1;
        else{
            return 0;
        }
    }
    $Num1=$_POST['Num1'];
    if(checkAdam($Num1)){
        echo "$Num1 is adam number <br>";
    }
    else{
        echo "Try Another!";
    }
?>
</body>
</html>