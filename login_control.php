<?php  //Start the Session
if ($_SERVER['REQUEST_METHOD'] !== "POST") exit();
require('config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['Username']) && isset($_POST['Password'])) {

    //3.1.1 Assigning posted values to variables.
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $query = "SELECT password FROM `customer` WHERE name='$username'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $nr_rows = mysqli_num_rows($result);
    if ($nr_rows == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: /Webshop");
    }

    if (password_verify($password, $row["password"])) {
        //3.1.2 Checking the values are existing in the database or not
        $query = "SELECT * FROM `customer` WHERE name='$username'";

        $result = mysqli_query($link, $query) or die(mysqli_error($link));


        $count = mysqli_num_rows($result);
        //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1) {
            // echo("HET WERKT");

            // session_name($username);
            session_start();
            $_SESSION['username'] = $username;
            // header("Location: /Webshop");
        } else {
            //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
            $fmsg = "Invalid Login Credentials.";
            print($fmsg);
        }
    }
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])) {
    header("Location: /Webshop");
}
