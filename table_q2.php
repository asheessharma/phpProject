<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1px >
    <?php
        for($i=0;$i<10;$i++){
            echo "<tr>";
            for($j=0;$j<10;$j++){
                if($i==0){
                    echo "<td>";
                    echo "0";
                    echo $j;
                    echo " ";
                   echo "</td>";
                }
                else{
                    echo "<td>";
                    echo $i*10+$j;
                    echo " ";
                   echo "</td>";
                }
            }
            echo"<br/>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>