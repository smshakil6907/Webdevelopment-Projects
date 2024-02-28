<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === "") {
        $_SESSION["userNameErr"] = "Username is empty!!";
    }
    if($password === "") {
        $_SESSION["passwordErr"] = "password is empty!!";
    }
    header("location: index.php");
}
?>



