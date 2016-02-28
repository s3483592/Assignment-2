<?php

session_start();



## I recived help from the Chat 9 discussion and the code examples##
### -- cart functions -- ##

if ( ! isset($_SESSION['cart'])) {  
        $_SESSION['cart'] = array();           ## make sure cart exists
    }
    
    
    ## Add to Cart
    function add($product) {
        if(isset($_SESSION['cart'][$product['id']])) {
            $_SESSION['cart'][$product['id']]['qty'] ++;
            return TRUE;
        } else {
            $_SESSION['cart'][$product['id']] = $product;
            $_SESSION['cart'][$product['id']]['qty'] = 1;
            return TRUE;
        }
        return FALSE;
    }
    
     ## Remove from Cart
    function remove($id) {
        if(isset($_SESSION['cart'][$id])) {
            if ($_SESSION['cart'][$id]['qty'] > 1) {
                $_SESSION['cart'][$id]['qty'] --;            
            } else {
                unset($_SESSION['cart'][$id]);
            }
            return TRUE;
        } else {
          return FALSE;
        }
        return FALSE;
    }
    
    ?>