<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="login_validation.js"></script>
    <title>shakil</title>
</head>

<body>
    <form method="post" action="../controller/login_action.php" onsubmit="return loginValidation(this)">
        <div style="text-align: center;">
            <img src="logo.png" alt="Logo" style="width: 100px; height: 100px;">
        </div>
        <h1 style="color: #c2704e">Login</h1>
        <input type="text" name="username" placeholder="Email or Phone" value="<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : "";
                                                                            unset($_SESSION["username"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["userNameErr"]) ? $_SESSION["userNameErr"] . "<br>" : "";
            unset($_SESSION["userNameErr"]); ?>
            <div id="userNameErr"></div>
        </div>
        <input type="text" name="password" placeholder="password" value="<?php echo isset($_SESSION["password"]) ? $_SESSION["password"] : "";
                                                                            unset($_SESSION["password"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["passwordErr"]) ? $_SESSION["passwordErr"] . "<br>" : "";
            unset($_SESSION["passwordErr"]); ?>
            <div id="passwordErr"></div>
        </div>
        <input type="submit" value="Login" id="">
        <br><br>
        <a href="signup.php">Dont have an account?</a>

    </form>

</body>

</html>