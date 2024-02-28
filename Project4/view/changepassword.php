<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Change Password</title>
</head>

<body>
    <h1 style="color: #4caf50">Change Password</h1>
    <form method="post" action="../controller/changepa_action.php">
        <input type="text" name="currentpassword" placeholder="Current Password"  value="<?php echo isset($_SESSION["currentpassword"]) ? $_SESSION["currentpassword"] : "";
                                                                                unset($_SESSION["currentpassword"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["currentpasswordErr"]) ? $_SESSION["currentpasswordErr"] : "";
            unset($_SESSION["currentpasswordErr"]);
            echo "<br>"; ?>
        </div>
        <input type="text" name="newpassword" placeholder="New password"  value="<?php echo isset($_SESSION["newpassword"]) ? $_SESSION["newpassword"] : "";
                                                                                unset($_SESSION["newpassword"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["newpasswordErr"]) ? $_SESSION["newpasswordErr"] : "";
            unset($_SESSION["newpasswordErr"]);
            echo "<br>"; ?>
        </div>

        <input type="text" name="cnpassword" placeholder="Confirm new password"  value="<?php echo isset($_SESSION["cnpassword"]) ? $_SESSION["cnpassword"] : "";
                                                                                unset($_SESSION["cnpassword"]); ?>">
        <div style="color: red;">
            <?php echo isset($_SESSION["cnpasswordErr"]) ? $_SESSION["cnpasswordErr"] : "";
            unset($_SESSION["cnpasswordErr"]);
            echo "<br>"; ?>
        </div>
        <input type="submit" value="Change Password" id="">
        <br><br>

    </form>

</body>

</html>