<?php
$num_4='A';
// $num_2=4;
// $num_3=4.01;
$num_1=ord($num_4);
switch($num_1>=48 && $num_1<=57){
    case 1:
        echo "Number";
        break;
    case 0:
        switch($num_1>=65 && $num_1<=90){
            case 1:
                echo "upper case";
                break;
            case 0:
                switch($num_1>=97 && $num_1<=122){
                    case 1:
                        echo "lower case";
                        break;
                        case 0:
                            echo "Invalid";
                            break;
                } 
        }
}
?>