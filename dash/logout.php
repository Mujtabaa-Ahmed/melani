<?php
session_start();
session_destroy();
// session_destroy();
header("location:index.php");
// echo $_SESSION['name'];
?>