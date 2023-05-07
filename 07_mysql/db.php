<?php 
 $connection = mysqli_connect("localhost","root","","loginapp",3307);

 if(!$connection){
    die("Database not connected");
 }
//  if($connection){
//      echo "we are connected";
//  }else {
//      die("Database connection failed");
//  }

?>