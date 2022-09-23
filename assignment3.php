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
    /****** QUESTION-1 ****** 
    $str1="abcdefghijkmnop";
    echo(strtoupper($str1));
    echo "<br>";
    echo(ucfirst($str1));
    echo "<br>";
    $str2="ABCDeFghijkmnop";
    echo(lcfirst($str2));
    echo "<br>";
    $str3="ashees is a good boy";
    echo(ucwords($str3)); */

    /*---- QUESTION-2 ----
       $num="082307";
    $arr=str_split($num,2);
    $arr1=implode(":",$arr);
    print_r($arr1);*/
    
    /*Question-3
    $str4="The quick black fox jumps over the white dog";
    echo(stripos($str4,"over"));*/

    /*Question-4  
    $num1=20.122121;
    $strvalue=strval($num1);
    var_dump($strvalue); */
     
    //Question-5
    $str5='ak@creation.com';
    $arr2=str_split($str5);
    $s="";
    $c=0;
    for($i=count($arr2)-3;$i!=count($arr2);$i++){
        $s.=$arr2[$i];
        if(++$c==3)
        break;
    }
    echo($s);  
    


    ?>
    
</body>
</html>