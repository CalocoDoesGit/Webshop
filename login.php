<!DOCTYPE html>
<html>
<head>
        <title>Webshop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="images/m.ico" type="image/x-icon" />-->
    </head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/loginfade.js"></script>
</head>

<body>

    <link rel="stylesheet" href="css/login.css">

    <!--<div id="Login-GrayFade" class="fadein" onclick="loginfade('out')"></div>  -->

    <div id="Login-Body">
        <form name="Login-Form" method="POST" action="/Webshop/login_control.php">
            <input required type="text" id="Username" name="Username" placeholder="Username/Email"><br>
            <input required type="password" id="Password" name="Password" placeholder="Password"><br>
            <input type="submit" id="PasswordReset" name="PasswordReset" value="Reset Password">
            <input type="submit" id="Login" name="Login" value="Login">
        </form>
        <div id="RegisterDiv">No account yet? Register <a id="Register" href="register.php">here</a>.</div>
    </div>

</body>

</html>
