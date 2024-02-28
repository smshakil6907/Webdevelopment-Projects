<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="signup_validation.js"></script>
    <title>sign up</title>
</head>

<body>
     <div class="signup-container">
        <form method="post" action="../controller/signup_action.php" onsubmit="return signupValidation(this)">
        <img src="logo.png" alt="Logo" style="width: 100px; height: 100px;"> 
        <h1 style="color: #c2704e">Sign Up</h1>
            <input type="text" name="firstname" placeholder="First name" value="<?php echo isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "";
                                                                                unset($_SESSION["firstname"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["firstnameErr"]) ? $_SESSION["firstnameErr"] . "<br>" : "";
                unset($_SESSION["firstnameErr"]);?>
                <div id="firstnameErr"></div>
            </div>
            <input type="text" name="surname" placeholder="Surname" value="<?php echo isset($_SESSION["surname"]) ? $_SESSION["surname"] : "";
                                                                                unset($_SESSION["surname"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["surnameErr"]) ? $_SESSION["surnameErr"] ."<br>" : "";
                unset($_SESSION["surnameErr"]);?>
                <div id="surnameErr"></div>
            </div>
            <input type="text" name="mobileoremail" placeholder=" Mobile number or email"  value="<?php echo isset($_SESSION["mobileoremail"]) ? $_SESSION["mobileoremail"] : "";
                                                                                unset($_SESSION["mobileoremail"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["mobileoremailErr"]) ? $_SESSION["mobileoremailErr"] . "<br>" : "";
                unset($_SESSION["mobileoremailErr"]);?>
                 <div id="mobileoremailErr"></div>
                </div>
            <input type="text" name="password" placeholder="password"  value="<?php echo isset($_SESSION["password"]) ? $_SESSION["password"] : "";
                                                                                unset($_SESSION["password"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["passwordErr"]) ? $_SESSION["passwordErr"] . "<br>" : "";
                unset($_SESSION["passwordErr"]);?>
                <div id="passwordErr"></div>
            </div>
            <b>Date Of Birth: </b>
            <input type="date" name="dob"  value="<?php echo isset($_SESSION["dob"]) ? $_SESSION["dob"] : "";
                                                                                unset($_SESSION["dob"]); ?>">
            <div style="color: red;">
                <?php echo isset($_SESSION["dobErr"]) ? $_SESSION["dobErr"] . "<br>": "";
                unset($_SESSION["dobErr"]);?>
                <div id="dobErr"></div>
            </div>
            <b>Gender:</b>
            <input type="radio" id="male" name="gender" value="male" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'male') ? 'checked' : ''?>>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'female') ? 'checked' : '' ?>>
            <label for="female">Female</label>
            <input type="radio" id="others" name="gender" value="others" <?php echo (isset($_SESSION['gender']) && $_SESSION['gender'] === 'others') ? 'checked' : '' ?>>
            <?php unset($_SESSION["gender"]); ?>
            <label for="others">Others</label>
            <div style="color: red;">
                <?php
                echo isset($_SESSION["genderErr"]) ? $_SESSION["genderErr"] . "<br>": "";
                unset($_SESSION["genderErr"]);?>
                <div id="genderErr"></div>
            </div>
            <input type="submit" value="Sign Up" id="" class="button1">
            <br><br>
            <a href="login.php">Alrady have an account?</a>

        </form>
    </div>

</body>

</html>