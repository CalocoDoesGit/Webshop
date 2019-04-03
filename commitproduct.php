<?php  //Start the Session
if ($_SERVER['REQUEST_METHOD'] !== "POST") exit();
require('config.php');

$Name = $_POST["Name"];

$Price = "0,-";
if (strpos($_POST["Price"], '.') !== false) {
    $Price = str_replace(".",",",$_POST["Price"]);
    if(strlen(substr(strrchr($Price, ","), 1)) < "2"){
        if(strlen(substr(strrchr($Price, ","), 1)) == "1"){
            if(strpos($Price, ',-') == false){
                $Price = $Price."0";
            }
        }else{
            $Price = $Price."-";
        }
    }else if (strlen(substr(strrchr($Price, ","), 1)) > "2"){
        $Price = substr($Price, 0, strpos($Price, ',')+3);
    }
}else{
    $Price = $_POST["Price"].",-";
}

if(strpos($Price, ',00') !== false){
    $Price = str_replace(",00",",-",$Price);
}

$Stock = $_POST["Stock"];
$Description = $_POST["Description"];
$Tag1 = $_POST["Tag1"];
$Tag2 = $_POST["Tag2"];
$Tag3 = $_POST["Tag3"];
$Image = $_POST["Image"];

$sql = "INSERT INTO product (`name`, `price`, `stock`, `description`, `description_short`, `tag1`, `tag2`, `tag3`, `image`)
VALUES ('$Name', '$Price', '$Stock', '$Description', '$Description', '$Tag1', '$Tag2', '$Tag3', '$Image')";

if ($link->query($sql) === TRUE) {
    header("Location: /Webshop/addproduct.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

?>