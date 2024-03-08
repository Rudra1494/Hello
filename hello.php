<?php 
$password = "hello";
$hashPass = password_hash($password, PASSWORD_BCRYPT);

$originalPass = "hello";

if(password_verify($originalPass, $hashPass)){
    echo "matched";
}else{
    echo "not matched";
}
?>