<?php  //Start the Session
if ($_SERVER['REQUEST_METHOD'] !== "POST") exit();
require('config.php');

$Id = $_POST["Id"];

$sql = "DELETE FROM `product` WHERE `id` = $Id";

if ($link->query($sql) === TRUE) {
    header("Location: /Webshop/editproduct.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

?>