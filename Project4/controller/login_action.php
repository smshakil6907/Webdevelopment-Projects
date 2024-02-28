<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $flag = true;
    if($username === "") {
        $_SESSION["userNameErr"] = "Username is empty!!";
        $flag = false;
    } else {    
        $_SESSION["username"] = $username;
    }
    if($password === "") {
        $_SESSION["passwordErr"] = "password is empty!!";
        $flag = false;
    } else {       
        $_SESSION["password"] = $password;
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

        // SQL query to check if the username and password match a record in the database
        $sql = "SELECT * FROM user WHERE mobileoremail = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Authentication successful
            header("location: ../view/home.php");
        } else {
            $_SESSION["passwordErr"] = "Username or password is wrong!!";
            header("location: ../view/login.php");
        }

        // Close the database connection
        $conn->close();
            
    } else 
        header("location: ../view/login.php");
}
?>



