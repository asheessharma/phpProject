<?php
if(isset($_POST['save']))
{
 $name = $_POST['uname'];
 $email = $_POST['eml'];
 $passw = $_POST['psw'];
$con=mysqli_connect('localhost','root','','registration');
if(!$con)
{
 echo "You are not connect to the server";
}
 $sql="insert into regis(username,email,pass) values ('$name','$email','$passw')";
if(mysqli_query($con, $sql))
{
 //echo "record inserted succefully";
 //header("refresh:5,url=secm.html");
 header("location:registration.html");
}
}


// display 


if(isset($_POST['display']))
{
$con=mysqli_connect('localhost','root','','registration');
if(!$con)
{
 echo "You are not connect to the server";
}
 $sql="SELECT id,username,email,pass FROM regis";
 $result=mysqli_query($con, $sql);

 if(mysqli_num_rows($result)>0)
 {
    
   echo "<table border='1'>
 <tr>
 <th>Id</th>
 <th>Username</th>
 <th>Email</th>
 <th>Password</th>
 </tr>";

 while($row=mysqli_fetch_array($result))
 {  
    
  echo "<tr><form action=registration.php method=post>";
  echo "<td><input type=text name=id readonly value='".$row['id']."'></td> ";
  echo "<td><input type=text name=username value='".$row['username']."'></td> ";
  echo "<td><input type=text name=email value='".$row['email']."'></td> ";
  echo "<td><input type=text name=password value='".$row['pass']."'></td> ";
  
  echo "<td><input type=submit value=Update name=update>";
  echo "<td><input type=submit value=Delete name = delete>";
  echo "</form></tr>";
 }
}
else
{
echo "No rows found";
} 
echo "</table>";
}   

/* UPDATE                  */


if(isset($_POST['update']))
{
$con = mysqli_connect('localhost','root','','registration');  

   
 if(!$con)  
 {  
     echo 'not connect to the server';  
 } 
$name = $_POST['username'];
$eid = $_POST['id'];


 $sql="UPDATE regis SET username='$name' WHERE id='$eid'";
 if(mysqli_query($con,$sql))
 {
  echo "$eid  with name $name  is updated";
 }
}

/*if(isset($_POST['delete']))
{
echo "delete click";
} 

id,username,email_user,pass_user

uname,'eml','psw' */


?>