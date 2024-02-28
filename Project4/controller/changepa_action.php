<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $currentpassword = $_POST['currentpassword'];
    if($currentpassword === "") {
        $_SESSION["currentpasswordErr"] = "Current Password is empty!!";
    } else{
        $_SESSION["currentpassword"] = $currentpassword;
    }
    $newpassword = $_POST['newpassword'];
    if($newpassword === "") {
        $_SESSION["newpasswordErr"] = "New Password is empty!!";
    } else{
        $_SESSION["newpassword"] = $newpassword;
    }
    $cnpassword = $_POST['cnpassword'];
    if($cnpassword === "") {
        $_SESSION["cnpasswordErr"] = "Current Password is empty!!";
    } else{
        $_SESSION["cnpassword"] = $cnpassword;
    }
    header("location: ../view/changepassword.php");
}
?>



