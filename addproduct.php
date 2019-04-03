<html>

    <head>
        <title>Webshop Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/addproduct.css">
        <link rel="shortcut icon" href="images/m.ico" type="image/x-icon" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Roboto+Mono|Material+Icons">
    </head>

    <?php include("header.php"); ?>

    <div class="product-body-add">
        <form name="Login-Form" method="POST" action="/Webshop/commitproduct.php" class="product-form">
            <input required type="text" id="Image" name="Image" placeholder="Image" onchange="updatepreview(ImageElement, 'Image')">
            <div class="product-text-add">
                <input required type="text" id="Name" name="Name" placeholder="Name" onchange="updatepreview(NameElement, 'Name')">
                <textarea name="Description" id="Description" rows="10" cols="30" placeholder="Description" onchange="updatepreview(DescriptionElement, 'Description')"></textarea>
            </div>
            <div class="product-right-side-add">
                <div class="product-price-amount">
                    <br>
                    <input required type="number" id="Price" name="Price" placeholder="Price" onchange="updatepreview(PriceElement, 'Price')">
                    <input required type="number" id="Stock" name="Stock" placeholder="Stock" onchange="updatepreview(StockElement, 'Stock')">
                </div>
                <div class="product-icons">
                    <select name="Tag1" id="Tag1" class="material-icons" onchange="updatepreview(Tag1Element, 'Tag1')">
                        <option value=""></option>
                        <?php
                            require_once "config.php";

                            $sql="SELECT * FROM tags ORDER BY name DESC";
                            $result=mysqli_query($link,$sql);
                    
                            while($rows=mysqli_fetch_array($result)){
                        ?>
                                <option value=<?php echo $rows['name'];?>><?php echo $rows['name']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <select name="Tag2" id="Tag2" class="material-icons" onchange="updatepreview(Tag2Element, 'Tag2')">
                        <option value=""></option>
                        <?php
                            require_once "config.php";

                            $sql="SELECT * FROM tags ORDER BY name DESC";
                            $result=mysqli_query($link,$sql);
                    
                            while($rows=mysqli_fetch_array($result)){
                        ?>
                                <option value=<?php echo $rows['name'];?>><?php echo $rows['name']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <select name="Tag3" id="Tag3" class="material-icons" onchange="updatepreview(Tag3Element, 'Tag3')">
                        <option value=""></option>
                        <?php
                            require_once "config.php";

                            $sql="SELECT * FROM tags ORDER BY name DESC";
                            $result=mysqli_query($link,$sql);
                    
                            while($rows=mysqli_fetch_array($result)){
                        ?>
                                <option value=<?php echo $rows['name'];?>><?php echo $rows['name']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <input type="submit" id="Commit" name="Commit" value="Commit" class="product-add-to-cart-back-commit">
                </div>
            </div>
        </form>
    </div><br>

    <div class="product-body">
        <a><img src="images/placeholder.png" alt="There was ment to be an image here" class="product-image" id="image-preview" ></a>
        <div class="product-text">
            <h1><a Id="name-preview">*</a></h1>
            <p Id="description-preview">*</p>
        </div>
        <div class="product-right-side">
            <div class="product-price-amount">
                <br>
                <h2 id="price-preview">€00,-</h2>
                <h3 id="stock-preview">0 IN STOCK</h3>
            </div>
            <div class="product-icons">
                <ul>
                    <li> <a class="material-icons" id="tag1-preview"> error </a> </li>
                    <li> <a class="material-icons" id="tag2-preview"> error </a> </li>
                    <li> <a class="material-icons" id="tag3-preview"> error </a> </li>
                </ul>
            </div>
            <div class="product-add-to-cart-back"><a class="product-add-to-cart">Add to cart</a></div>
        </div>
    </div>
</html>

<script src="js/addproduct_preview.js"></script>