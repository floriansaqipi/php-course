<?php 

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","cms");
define("DB_PORT",3307);


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME,DB_PORT);

// if($connection){
//     echo "We are connected";
// }

?>