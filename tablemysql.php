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
        echo " connection is established";
    }
    $sql="CREATE TABLE `myphptable` ( `SNo` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(10) NOT NULL , `Age` INT(5) NOT NULL , PRIMARY KEY (`SNo`))";

    $result = mysqli_query($connection, $sql);

    if($result){
        echo("Table created successfully!!! ");
    }
    else{
        echo "Table was not created";
    }
    



?>