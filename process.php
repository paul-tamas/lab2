<?php

$username = $_POST['user'];
$password = $_POST['pass'];
$index = 0;

if($username == "gmaer" && $password == "123" ){
    echo"Successfully logged in!";
    echo " Welcome,".$username;
}
else{
    echo"Username or password is incorrect! Try again";
    $index++;
}

?>