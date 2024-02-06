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

function isUserExists($email, $password){
    return searchUser($email, $password);
}

function getUserFName($email, $password){
    $result = getUserName($email, $password);
    return $result;
}

function createListing($email, $price, $address, $bath, $bed, $housetype, $size){
    $result = makeListing($email, $price, $address, $bath, $bed, $housetype, $size);
    return $result;
}

function getListing($email){
    $result = getPropertyListings($email);
    return  $result;
}

function removeListing($email,$address) {
    $result = deleteListing($email, $address);
    return $result;
}



?>