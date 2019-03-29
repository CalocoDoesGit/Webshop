<?php

 //   echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
 require_once('cart.php');
 
   // toon de producten
    for ($idproduct = 1; $idproduct <= 5; $idproduct++) {
     // toon deze als je die al in de winkelwagen hebt
      if (in_array($idproduct, $_SESSION['cart'])) {
      echo "$idproduct - <font color='grey'>Zit in je winkelmand</font> <br>";
      }
      else {
      // toon deze als die niet in de winkelwagen zit
        echo "$idproduct - <a href='cart.php?idproduct=$idproduct'>stop in winkelmand </a><br>";
        } 
    } 
    
    // toon de link om dee winkelwagen leeg te maken als er iets in zit
    if (!empty($_SESSION['cart'])) {
    	echo '<p><a href="reset.php">maak winkelmand leeg</a></p>';
    }
?>