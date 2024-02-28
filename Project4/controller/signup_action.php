<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $flag = true;
    $firstname = $_POST['firstname'];
    if($firstname === "") {
        $_SESSION["firstnameErr"] = "First name is empty!!";
        $flag = false;
    } else{
        $_SESSION["firstname"] = $firstname;
    }

    $surname = $_POST['surname'];
    if($surname === "") {
        $_SESSION["surnameErr"] = "Surname name is empty!!";
        $flag = false;
    } else{
        $_SESSION["surname"] = $surname;
    }

    $mobileoremail = $_POST['mobileoremail'];
    if($mobileoremail === "") {
        $_SESSION["mobileoremailErr"] = "Mobileoremail name is empty!!";
        $flag = false;
    } else{
        $_SESSION["mobileoremail"] = $mobileoremail;
    }
    
    $password = $_POST['password'];
    if($password === "") {
        $_SESSION["passwordErr"] = "Password name is empty!!";
        $flag = false;
    } else{
        $_SESSION["password"] = $password;
    }

    $dob = $_POST['dob'];
    if($dob === "") {
        $_SESSION["dobErr"] = "dob name is empty!!";
        $flag = false;
    } else{
        $_SESSION["dob"] = $dob;
    }

    $gender = $_POST['gender'];
    if(empty($gender)) {
        $_SESSION["genderErr"] = "gender name is empty!!";
        $flag = false;
    } else{
        $_SESSION["gender"] = $gender;
    }
    
    if($flag === true) {
        // Database connection parameters
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "save_your_links";

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert user information into the database
        $sql = "INSERT INTO user (firstname, surname, mobileoremail, password, dob, gender)
                VALUES ('$firstname', '$surname', '$mobileoremail', '$password', '$dob', '$gender')";

        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            header("location: ../view/home.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
    else 
        header("location: ../view/signup.php");
}
?>



