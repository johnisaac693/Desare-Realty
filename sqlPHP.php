<?php

include_once 'functions.php';

$servername = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "db_desare";

$con = new mysqli("localhost", "root", "", "db_desare");

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
    $state -> bind_param("ssiss", $name, $email, $phonenum, $address, $password);
    $result = $state -> execute();

    if (!$result){
        echo $state -> error;
    }

    $state -> close();

}

function getUserName($email, $password){
    global $con;
    $state = $con->prepare("SELECT `name` FROM tbl_approvedacc WHERE email = ? AND password = ?");
    $state->bind_param("ss", $email, $password);
    $result = $state->execute();

    if (!$result) {
        echo $state->error;
        return false;
    }
    $name = "";
    $state->store_result();
    $state->bind_result($name);
    $state->fetch();

    if ($state->num_rows > 0) {
        // User exists
        $result = $name;
    } else {
        // User does not exist
        $result = false;
    }

    $state->close();
    return $result;
}

function makelisting($email, $price, $address, $bath, $bed, $housetype, $size){
    global $con;

    $state = $con -> prepare("INSERT INTO tbl_activelisting (`email`, `price`, `address`, `bath`, `bed`, `house_type`, `size`) values (?,?,?,?,?,?,?)");
    $state -> bind_param("sisiisi", $email, $price, $address, $bath, $bed, $housetype, $size);
    $result = $state -> execute();

    if (!$result){
        echo $state -> error;
    }

    $state -> close();
}


function soldlisting($email, $price, $address, $bath, $bed, $housetype, $size){
    global $con;

    $state = $con->prepare("INSERT INTO tbl_soldlisting (`email`, `price`, `bed`, `bath`, `address`, `house_type`, `size`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $state->bind_param("sisiisi", $email, $price, $address, $bath, $bed, $housetype, $size);
    $result = $state->execute();

    if (!$result){
        echo $state->error;
    }

    $state->close();
}

function deleteListing($email, $address) {
    global $con;

    // Prepare SQL query to delete listing by all parameters
    $state = $con->prepare("DELETE FROM tbl_activelisting WHERE email = ?  AND address = ?");
    $state->bind_param("ss", $email, $address);

    // Execute SQL query
    $result = $state->execute();

    if (!$result) {
        echo $state->error;
        return false;
    }

    // Close statement and return true indicating success
    $state->close();
    return true;
}


function getPropertyListings($email) {
    global $con;

    // Prepare SQL query
    $state = $con->prepare("SELECT * FROM tbl_activelisting WHERE email = ?");
    $state->bind_param("s", $email);

    // Execute SQL query
    $result = $state->execute();

    if (!$result) {
        echo $state->error;
        return false;
    }

    // Get result set
    $resultSet = $state->get_result();

    // Iterate through each row and create a div for each property listing
    while ($row = $resultSet->fetch_assoc()) {
        echo "<div class='property-card'>";
        echo "<img src='https://cdn2.iconfinder.com/data/icons/ui-kit-developer-glyphs/16/GlyphIcons-Home-512.png' alt='House'>";
        echo "<div class='description'>";
        echo "<p>Price: ₱" . $row['price'] . "</p>";
        echo "<p>Type: " . $row['house_type'] . "</p>";
        echo "<p>Address: " . $row['address'] . "</p>";
        echo "</div>";
        echo "<div class='info'>";
        echo "<img src='images/bed.png' alt='Bed' class='bed'><p class='bed'>" . $row['bed'] . "</p>";
        echo "<img src='images/shower.png' alt='Shower' class='shower'><p class='shower'>" . $row['bath'] . "</p>";
        echo "<img src='images/sqm.png' alt='sqm' class='sqm'><p class='sqm'>" . $row['size'] . "m2</p>";
        echo "</div>";
        echo "<button class='btnSell'>SELL</button>";
        echo "<button class='btnDlt' onclick='deleteProperty(\"$email\", \"" . $row['address'] . "\")'>DELETE</button>";
        echo "</div>";
    }

    

    // Close statement and return true indicating success
    $state->close();
    return true;
}
?>

