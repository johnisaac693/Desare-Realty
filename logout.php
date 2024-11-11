<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Logged out!');</script>";
header('Location: homepage.php');
exit();
?>
