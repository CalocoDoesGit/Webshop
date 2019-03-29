<html>

    <head>
        <title>Webshop Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/products.css">
        <link rel="shortcut icon" href="images/m.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Roboto+Mono|Material+Icons">
    </head>

    <?php include("header.php"); ?>

    <?php
        require_once "config.php";

        $sql="SELECT * FROM product ORDER BY price DESC";
        $result=mysqli_query($link,$sql);

        while($rows=mysqli_fetch_array($result)){
    ?>
        <div class="product-body">
            <a href=""><img src=<?php echo $rows["image"]; ?> alt="There was ment to be an image here" class="product-image" ></a>
            <div class="product-text">
                <h1><a href=""><?php echo $rows["name"]; ?></a></h1>
                <p><?php echo $rows["description_short"]; ?></p>
            </div>
            <div class="product-right-side">
                <div class="product-price-amount">
                    <br>
                    <h2>€<?php echo $rows["price"]; ?></h2>
                    <h3><?php echo $rows["stock"]; ?> IN STOCK</h3>
                </div>
                <div class="product-icons">
                    <?php if($rows["tag2"] == NULL){ ?>

                        <ul>
                            <li> <a href="" class="material-icons"> <?php echo $rows["tag1"]; ?> </a> </li>
                        </ul>

                    <?php } elseif($rows["tag2"] != NULL && $rows["tag3"] == NULL){ ?>

                        <ul>
                            <li> <a href="" class="material-icons"> <?php echo $rows["tag1"]; ?> </a> </li>
                            <li> <a href="" class="material-icons"> <?php echo $rows["tag2"]; ?> </a> </li>
                        </ul>
                    
                    <?php } else{ ?>
                        <ul>
                            <li> <a href="" class="material-icons"> <?php echo $rows["tag1"]; ?> </a> </li>
                            <li> <a href="" class="material-icons"> <?php echo $rows["tag2"]; ?> </a> </li>
                            <li> <a href="" class="material-icons"> <?php echo $rows["tag3"]; ?> </a> </li>
                        </ul>
                    <?php } ?>
                </div>
                <div href="./" class="product-add-to-cart-back"><a href="./" class="product-add-to-cart">Add to cart</a></div>
            </div>
        </div>
        <br>
    <?php
        }
    ?>

</html>
