<?php
     $servername="localhost";
     $username= "root";
     $password= "";
     $database=  "container";
 
     $connection= mysqli_connect($servername,$username,$password,$database);
     if(!$connection){
         die("connection not established: ".mysqli_connect_error());
     }
     else{
         echo " connection is established<br>";
     }

    $sql="insert into myphptable(SNO, Name, Age) VALUES ('', 'Akash', '25')";
    $result= mysqli_query($connection, $sql);

    if($result){
        echo "row insertion completed <br>";
    }
    else{
        echo "<br> task failed!!! ";
    }

?>