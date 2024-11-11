<?php
session_start();
include_once 'functions.php';

if(isset($_SESSION['email']) && isset($_POST['address'])) {
    $ownerEmail = $_SESSION['email'];
    $propertyAddress = $_POST['address'];

    $result = removeListing($ownerEmail, $propertyAddress);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Missing parameters.";
}
?>
