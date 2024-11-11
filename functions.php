<?php
include_once 'sqlPHP.php';

function registerUser($name, $email, $phonenum, $address, $password){
    $result = createUser($name, $email, $phonenum, $address, $password);
    return $result;
}

function duplicateUserCheck($email){
    $result = searchUserReg($email);
    return $result;
}


?>