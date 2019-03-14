
<?php
	require('config.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['zipcode']) && isset($_POST['housenumber'])){
        $username = $_POST['username'];
	    $email = $_POST['email'];
        $password = $_POST['password'];
        $zipcode = $_POST['zipcode'];
        $housenumber = $_POST['housenumber'];

        $hashed = password_hash($password, PASSWORD_DEFAULT);
 
        $query = "INSERT INTO `customer` (name, password, email, zipcode, number) VALUES ('$username', '$hashed', '$email', '$zipcode', '$housenumber')";
        $result = mysqli_query($link, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="css/register.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Name" required>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="input-zipcode" class="sr-only">Zipcode</label>
        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Zipcode" required autofocus>
        <label for="inputEmail" class="sr-only">House number</label>
        <input type="number" name="housenumber" id="housenumber" class="form-control" placeholder="Housenumber" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="./">Back</a>
      </form>
</div>
</body>
</html>