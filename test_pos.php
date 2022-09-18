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
    //$str1="ashish is a good boy ";
    //$str2="  ashish    is a bad students    ";
    $str3="  welcome to GLA university ";
    trim($str3);
    $str3=strrev($str3);
    echo "$str3";
    echo(strpos("$str3","e"));
    ?>
</body>
</html>