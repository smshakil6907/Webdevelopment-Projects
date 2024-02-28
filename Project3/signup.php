<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>sign up</title>
</head>

<body>
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form method="post" action="signup_action.php">
            <input type="text" name="firstname" placeholder="First name" value="<?php echo isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "";
                                                                                unset($_SESSION["firstname"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["firstnameErr"]) ? $_SESSION["firstnameErr"] : "";
                unset($_SESSION["firstnameErr"]);
                echo "<br>"; ?>
            </div>
            <input type="text" name="surname" placeholder="Surname">
            <div style="color: red;">
                <?php echo isset($_SESSION["surnameErr"]) ? $_SESSION["surnameErr"] : "";
                unset($_SESSION["surnameErr"]);
                echo "<br>"; ?>
            </div>
            <input type="text" name="mobileoremail" placeholder=" Mobile number or email">
            <div style="color: red;">
                <?php echo isset($_SESSION["mobileoremailErr"]) ? $_SESSION["mobileoremailErr"] : "";
                unset($_SESSION["mobileoremailErr"]);
                echo "<br>"; ?>
            </div>
            <input type="text" name="password" placeholder="password">
            <div style="color: red;">
                <?php echo isset($_SESSION["passwordErr"]) ? $_SESSION["passwordErr"] : "";
                unset($_SESSION["passwordErr"]);
                echo "<br>"; ?>
            </div>
            <b>Date Of Birth: </b>
            <input type="date" name="dob">
            <div style="color: red;">
                <?php echo isset($_SESSION["dobErr"]) ? $_SESSION["dobErr"] : "";
                unset($_SESSION["dobErr"]);
                echo "<br>"; ?>
            </div>
            <b>Gender:</b>
            <input type="radio" id="male" name="gender">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender">
            <label for="female">Female</label>
            <input type="radio" id="others" name="gender">
            <label for="others">Others</label>
            <div style="color: red;">
                <?php
                echo isset($_SESSION["genderErr"]) ? $_SESSION["genderErr"] : "";
                unset($_SESSION["genderErr"]);
                echo "<br>"; ?>
            </div>
            <input type="submit" value="Sign Up" id="" class="button1">

        </form>
        <br>
        <br>
        <a href="index.php">Alrady have an account?</a>
    </div>

</body>

</html>