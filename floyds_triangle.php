<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table   border=1px>
    <?php
    $c=0;
        for($i=1;$i<=5;$i++){  
            echo "<tr>";
            for($j=0;$j<$i;$j++){
                $c++;
                echo "<td>";
                echo $c;
                echo " ";
                echo "</td>";
            }
            echo "<br/>";
            echo "</tr>";
        }
    ?>
    </table>;
</body>
</html>