<?php

echo"<table  style='border-collapse:collapse'>";
        echo"<tr  >";
        echo"<th style='border:2px solid red;'>";
        echo"Input";
        echo"</th>";

        echo"<th style='border:2px solid red;'>";
        echo"Function";
        echo"</th>";
        echo"<th style='border:2px solid red;'>";
        echo"output";
        echo"</th>";
        echo"</tr>";

        echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["uname"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"md5()";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
              echo md5($data)."<br>";
            echo"</td>";

        echo"</tr>";
 
        echo"<tr >";
            echo"<td style='border:2px solid red;'>";
            $data=$_POST["format"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"number_format()";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo number_format($data,2,".",",")."<br>";
            echo"</td>";
        echo"</tr>";

        echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["ascii"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"ord()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo ord($data)."<br>";
            echo"</td>";
        echo"</tr>";




 
 echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["trim"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"rtrim()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo rtrim($data)."<br>";
            echo"</td>";
        echo"</tr>";

 
 
 
 echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["replace"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"str_replace()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo str_replace("adarsh","supriya",$data)."<br>";
            echo"</td>";
        echo"</tr>";



 
 echo"<tr>";
 echo"<td style='border:2px solid red;'>";
  $data=$_POST["strlen"];
  echo"$data";
 echo"</td>";

 echo"<td style='border:2px solid red;'>";
            echo"strlen()";
            echo"</td>";


 echo"<td style='border:2px solid red;'>";
   echo strlen($data)."<br>";
 echo"</td>";
echo"</tr>";
 


echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["shakya"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"strcasecmp()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo strcasecmp($data,"adarsh")."<br>";
            echo"</td>";
        echo"</tr>";



 echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["pos"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"strrpos()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo strrpos("I love php,i love php too!",$data)."<br>";
            echo"</td>";
        echo"</tr>";
 
 
 echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["sub"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"substr()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo substr($data,6)."<br>";
            echo"</td>";
        echo"</tr>";
 
 
 echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["lower"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"strtolower()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo strtolower($data)."<br>";
            echo"</td>";
        echo"</tr>";
//  $data=$_POST["ascii"];
//  echo ord($data)."<br>";

echo"<tr>";
            echo"<td style='border:2px solid red;'>";
             $data=$_POST["hex"];
             echo"$data";
            echo"</td>";

            echo"<td style='border:2px solid red;'>";
            echo"bin2hex()";
            echo"</td>";


            echo"<td style='border:2px solid red;'>";
              echo bin2hex($data)."<br>";
            echo"</td>";
        echo"</tr>";


 echo"<tr>";
 echo"<td style='border:2px solid red;'>";
  $data=$_POST["chop"];
  echo"$data";
 echo"</td>";

 echo"<td style='border:2px solid red;'>";
            echo"chop()";
            echo"</td>";


 echo"<td style='border:2px solid red;'>";
   echo chop($data)."<br>";
 echo"</td>";
echo"</tr>";
echo"</table>";

?>
