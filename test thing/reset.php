<?php

// verwijder winkelwagen (gooi array met winkelitems weg)
    session_start();
   if (array_key_exists('cart',$_SESSION)) {
            unset($_SESSION['cart']);
        }
 // en ga daarna naar de overzichtpagina
   header('location: products.php');
?>