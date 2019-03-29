<html>
    <link rel="stylesheet" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <header>
        <a href="./" id="ButtonHome" class="NotActive-Button">Home</a>
        <a href="products.php" id="ButtonProducts" class="NotActive-Button">Products</a>
        <a href="wishlist.php" id="ButtonWishList" class="NotActive-Button">Wish List</a>
        <a href="login.php" id="ButtonLogin" class="NotActive-Button"><?php if (isset($_SESSION)) { echo $_SESSION['username']; }else{ echo "Login"; } ?></a>
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