<?php
session_start();
session_destroy();
// session_destroy();
header("location:login.php");
// echo $_SESSION['name'];
?>