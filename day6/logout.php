<?php
session_start();
session_destroy();
echo"You've been logged out<a href='login.php'>CLICK<a/>here to login again.";
?>