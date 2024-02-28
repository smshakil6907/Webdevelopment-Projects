<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $firstname = $_POST['firstname'];
    if($firstname === "") {
        $_SESSION["firstnameErr"] = "First name is empty!!";
    } else{
        $_SESSION["firstname"] = $firstname;
    }

    $surname = $_POST['surname'];
    if($surname === "") {
        $_SESSION["surnameErr"] = "Surname name is empty!!";
    }

    $mobileoremail = $_POST['mobileoremail'];
    if($mobileoremail === "") {
        $_SESSION["mobileoremailErr"] = "Mobileoremail name is empty!!";
    }
    
    $password = $_POST['password'];
    if($password === "") {
        $_SESSION["passwordErr"] = "Password name is empty!!";
    }

    $dob = $_POST['dob'];
    if($dob === "") {
        $_SESSION["dobErr"] = "dob name is empty!!";
    }

    $gender = $_POST['gender'];
    if(empty($gender)) {
        $_SESSION["genderErr"] = "gender name is empty!!";
    }
    
    header("location: signup.php");
}
?>



