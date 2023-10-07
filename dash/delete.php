<?php

include("../connect.php");
$deleteID = $_GET["delete"];
$deleteIDC = $_GET["deleteC"];
$deleteIDD = $_GET["ddelete"];
if ($deleteID) {
    $deleteQ = mysqli_query($conn , "DELETE FROM `product` WHERE `product`.`id` = $deleteID");
    if ($deleteQ) {
    header("location:product.php");
}
}
if ($deleteIDC) {
    $deleteQ1 = mysqli_query($conn , "DELETE FROM `categouries` WHERE `categouries`.`c_id` = $deleteIDC");
    if ($deleteQ1) {
        header("location:add1.php");
    }
}
if ($deleteIDD) {
    $deleteQ1 = mysqli_query($conn , "DELETE FROM `deals` WHERE `deals`.`d_id` = $deleteIDD");
    if ($deleteQ1) {
        header("location:deals.php");
    }
}
?>