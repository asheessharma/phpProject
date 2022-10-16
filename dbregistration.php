<?php
    $servername="localhost";
    $username="root";
    $password="";

    $connection= mysqli_connect($servername,$username,$password);
    if(!$connection){
        die("connection not established: ".mysqli_connect_error());
    }
    else{
        echo " connection is established";
    }

    $sql= "CREATE DATABASE registration";
    $result=mysqli_query($connection,$sql);
    if($result){
        echo "DataBase created successfully!!!";
    }
    else{
        echo "<br> database was not created";
    }






?>