<?php
$wallet_amount=999.9;
$No_friend=1;
/*if($wallet_amount>700){
    if($No_friend>=2){
        echo "yash had breakfast in food street with friends ";
    }
    else{
        echo "Hadn't enoungh friends";
    }
   
}
else{
    echo "he had breakfast in collage mess";
}*/
if(($wallet_amount>100) && $wallet_amount<300){
    echo "Suraj dhaba";
}
else if($wallet_amount>300 && $wallet_amount<500){
    echo "StarBucks";
}
else if($wallet_amount>500 && $wallet_amount<1000){
    echo "brijwasi";
}
else{
    echo "Russian";
}
?>