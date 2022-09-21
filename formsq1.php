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
        $Num1=$_POST['Num1'];
        $Num2=$_POST['Num2'];
        $Num3=$_POST['Num3'];
        $min=$Num1<$Num2?$Num1:$Num2;
        $min=$min<$Num3?$min:$Num3;
        echo($min);
    ?>
</body>
</html>