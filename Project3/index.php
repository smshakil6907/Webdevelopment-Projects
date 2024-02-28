<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shakil</title>
</head>

<body>
    <h1>login</h1>
    <form method="post" action="index_action.php">
        <input type="text" name="username" placeholder="user name">
        <div style="color: red;">
            <?php echo isset($_SESSION["userNameErr"]) ? $_SESSION["userNameErr"] : "";
            unset($_SESSION["userNameErr"]);
            echo "<br>"; ?>
        </div>
        <input type="text" name="password" placeholder="password">
        <div style="color: red;">
            <?php echo isset($_SESSION["passwordErr"]) ? $_SESSION["passwordErr"] : "";
            unset($_SESSION["passwordErr"]);
            echo "<br>"; ?>
        </div>
        <input type="submit" value="login" id="">
    </form>
    <br>
    <br>
    <a href="signup.html">Dont have an account?</a>

</body>

</html>