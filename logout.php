<!--
   Author: Piera Blum
   Date: 21.02.2024
   Description: It is a PHP script for logging out users.
-->
<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to homepage
header('Location: homepage.php');
exit();
?>
