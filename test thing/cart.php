<?php
    session_start();
    
    // maak de winkelwagen array als die niet bestaat
    function createCart() {
        if (!array_key_exists('cart',$_SESSION)) {
            $_SESSION['cart'] = array();
        }
    }
    
    // roep deze functie aan om een product in de winkelwagen te zetten
    function addItemToCart($item) {
        if (!in_array($item, $_SESSION['cart'])) { 
            array_push($_SESSION['cart'], $item);   
        } 
        // en ga daarna naar de overzichtpagina
   		header('location: products.php');
    }
    
     // roep deze functie aan om een product uit de winkelwagen te verwijderen
    function delItemfromCart($item) {
       if (in_array($item, $_SESSION['cart'])) {
       		$plek=array_search($item,$_SESSION['cart']);
            unset($_SESSION['cart'][$plek]);
        } 
         // en ga daarna naar de overzichtpagina
   		header('location: products.php');
    }
    
     // roep deze functie aan om de winkelwagen te tonen    
    function showCart() {
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $cartitem) {
                echo $cartitem . ' <a href="cart.php?del&idproduct=' . $cartitem . '">x</a><br/>';
            }
          echo '<br>';
        }
         else {
            echo '<h2>Je winkelwagen is leeg</h2>';
           
        }
     // als de addtocart pagina wordt gebruikt bestaat $_GET['idproduct, dus wordt deze link getoond
        if(isset($_GET['idproduct'])) {     
    	echo '<p><a href="products.php">products</a><br/>';
        }
    }
	// voer de functie createcard uit als de pagina wordt aangeroepen
    createCart();
    
    // als idproduct in de url zit (na het vraagteken) dan wordt deze code uitgevoerd
    if(!empty($_GET['idproduct'])) { 
     // als del niet in de url zit dan voert ie deze functie uit : toevoegen
   		 if (!isset($_GET['del']))	{
        	addItemToCart($_GET['idproduct']);
    	}
    	// als del wel in de url zit dan voert ie deze functie uit : verwijderen
    	else	{
        	delItemfromCart($_GET['idproduct']);
    	}
    }
    
    // voer de functie showcard uit als de pagina wordt aangeroepen
    showCart();
?>