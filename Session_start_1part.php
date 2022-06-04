<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // session_unset();
    $_session["login"] = "login succesful";
    $_SESSION["email"] = $_GET['email'];
    $_SESSION["password"] = $_GET['password'];
    $_SESSION["confirmPassword"] = $_GET['confirmPassword'];

    if (!isset($_SESSION["login"])) {
        echo $_session['login'];
        echo "<br>";
        echo "username : " . $_GET['email'];
        echo "<br>";
        if ($_SESSION["password"] != $_SESSION["confirmPassword"]) {
            echo "Please confirm the password" . "<br>" . "password is not correct";
        } else {
            echo "password : " . $_GET['password'];
            echo "<br>";
            echo " confirm password : " . $_GET['confirmPassword'];
            echo "<br>";
            echo "<a href='http://localhost/website/gadget.php'><button type='button' name='confirm'>Confirm</button></a>";
        }
    }
    ?>
</body>

</html>