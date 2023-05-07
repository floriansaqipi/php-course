<?php include "db.php";?>
<?php include "functions.php";?>
<?php

        



        // if($username && $password){
        //     echo $password;
        //     echo $username;
        // } else {
        //     echo "this field cannot be blank";
        // }
  

?>
<?php include "includes/header.php"?>
<body>
    <div class="container">
        <div class="col-sm-6">
            <pre>

           <?php 
              readRows();
            ?>
            </pre>

        </div>
<?php include "includes/footer.php";?>