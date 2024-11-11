<?php
$servername = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "db_desare";

$con = new mysqli("localhost", "root", "", "test");

if ($con -> connect_error){
    die("Connection failed: " .$con -> connect_error);
}


function searchUserReg($email){
    global $con;
    $state = $con->prepare("SELECT `email` from tbl_approvedacc WHERE email = ?");
    $state->bind_param("s", $email);
    $result = $state->execute();

    if (!$result) {
        echo $state->error;
        return false;
    }

    $state->store_result();

    $state->bind_result($email);
    $state->fetch();

    if ($state->num_rows > 0) {
        // User exists
        $result = true;
    } else {
        // User does not exist
        $result = false;
    }

    $state->close();
    return $result;
}

function searchUser($email, $password){
    global $con;
    $state = $con->prepare("SELECT `email` , `password` from tbl_approvedacc WHERE email = ? AND password = ?");
    $state->bind_param("ss", $email, $password);
    $result = $state->execute();

    if (!$result) {
        echo $state->error;
        return false;
    }

    $state->store_result();

    $state->bind_result($email, $password);
    $state->fetch();

    if ($state->num_rows > 0) {
        // User exists
        $result = true;
    } else {
        // User does not exist
        $result = false;
    }

    $state->close();
    return $result;
}



function createUser($name, $email, $phonenum, $address, $password){
    global $con;

    $state = $con -> prepare("INSERT INTO tbl_approvedacc (`name`,`email`, `phonenum`, `address`, `password`) values (?,?,?,?,?)");
    $state -> bind_param("sssss", $name, $email, $phonenum, $address, $password);
    $result = $state -> execute();

    if (!$result){
        echo $state -> error;
    }

    $state -> close();

}

function createlisting($email, $price, $address, $bath, $bed, $housetype, $size){
    global $con;

    $state = $con -> prepare("INSERT INTO tbl_activelisting (`email`, `price`, `bed`, `bath`, `address`, `house_type`, `size`) values (?,?,?,?,?,?)");
    $state -> bind_param("siiissi", $email, $price, $bed, $bath, $address, $housetype, $size);
    $result = $state -> execute();

    if (!$result){
        echo $state -> error;
    }

    $state -> close();

}

function soldlisting($email, $price, $address, $bath, $bed, $housetype, $size){
    global $con;

    $state = $con->prepare("INSERT INTO tbl_soldlisting (`email`, `price`, `bed`, `bath`, `address`, `house_type`, `size`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $state->bind_param("siiissi", $email, $price, $bed, $bath, $address, $housetype, $size);
    $result = $state->execute();

    if (!$result){
        echo $state->error;
    }

    $state->close();
}

function deleteListing($email,$price,$address,$bath,$bed,$housetype,$size){

}


$newEmail = "newemail@email.com";
$newPassword = "newpass";
$newAge = 22;


?>