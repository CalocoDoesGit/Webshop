<!DOCTYPE html>
<html>
    <head>
       <script type="text/javascript" src="js/loginfade.js"></script>
    </head>

<body>

    
     
    <link rel="stylesheet" href="css/login.css">

    <div id="Login-GrayFade" class="fadein" onclick="loginfade('out')"></div>

    <div id="Login-Body">
        <form name="Login-Form" method="post">
            <input required type="text" id="Username" name="Username" placeholder="Username/Email"><br>
            <input required type="password" id="Password" name="Password" placeholder="Password"><br>
            <input type="submit" id="PasswordReset" name="PasswordReset" value="Reset Password">
            <input type="submit" id="Login" name="Login" value="Login">
        </form>
        <div id="RegisterDiv">No account yet? Register <a id="Register" href="register.php">here</a>.</div>
    </div>
    
</body>

</html>
<?php  //Start the Session
session_start();
 require('config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['Username']) and isset($_POST['Password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['Username'];
$password = $_POST['Password'];

$hashed = password_hash($password, PASSWORD_DEFAULT);
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `customer` WHERE name='$username' and password='$hashed'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));


$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
}
?>