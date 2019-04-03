<html>

    <?php
        session_start();
    
        if((!isset($_SESSION['username']) || $_SESSION['username'] != "admin") && $_SERVER['PHP_SELF'] == "/Webshop/addproduct.php"){
            header("Location: /Webshop/products.php");
            exit;
        }
    ?>

    <link rel="stylesheet" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <header>
        <a href="./" id="header-logo"><img src="images/logo.png" alt="There was ment to be an image here"></a>
        <a href="./" id="ButtonLeft" class="NotActive-Button">Home</a>
        <a href="products.php" id="ButtonLeft" class="NotActive-Button">Products</a>
    
        <?php
            if (isset($_SESSION['username'])) {
                echo "<a href='user.php' id='ButtonRight' class='NotActive-Button'>", $_SESSION['username'], "</a>";
                echo "<a href='wishlist.php' id='ButtonRight' class='NotActive-Button'>Wish List</a>";
                echo "<a href='cart.php' id='ButtonRight' class='NotActive-Button'>Cart</a>";
                if($_SESSION['username'] == "admin" && ($_SERVER['PHP_SELF'] == "/Webshop/products.php" || $_SERVER['PHP_SELF'] == "/Webshop/addproduct.php")){
                    echo "<a href='editproduct.php' id='editproduct' class='material-icons'></a>";
                }
                if($_SESSION['username'] == "admin" && $_SERVER['PHP_SELF'] == "/Webshop/editproduct.php"){
                    echo "<a href='addproduct.php' id='addproduct' class='material-icons'></a>";
                }
            }else{
                echo "<a href='login.php' id='ButtonRight' class='NotActive-Button'>Login</a>";
            }
        ?>
    
    </header>

    <script>
        var path = window.location.pathname;
        var page = path.split("/").pop();
        console.log( page );

        if (page == ""){
            document.getElementById("ButtonHome").classList.remove("NotActive-Button");
            document.getElementById("ButtonHome").classList.add("Active-Button");
        }
        else if (page == "products.php"){
            document.getElementById("ButtonProducts").classList.remove("NotActive-Button");
            document.getElementById("ButtonProducts").classList.add("Active-Button");
        }
        else if (page == "wishlist.php"){
            document.getElementById("ButtonWishList").classList.remove("NotActive-Button");
            document.getElementById("ButtonWishList").classList.add("Active-Button");
        }
    </script>
</html>