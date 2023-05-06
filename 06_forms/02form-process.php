
<?php 
if(isset($_POST["submit"])){
    $name = array("Florian","Korab","Gentrit","Ardit");
    $minimun = 5;
    $maximum = 10;


    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimun){
        echo "Username has to be longer than 5";

    }

    if(strlen($username) > $maximum){
        echo "Username can not be longer than 10";
        
    }

    if(!in_array($username,$name)){
        echo "You re not allowed";
    }else {
        echo "welcome";
    }


    // echo "<br>";
    // echo "Hello" . $username . "<br>";
    // echo "Password" . $password . "<br>";
}

?>