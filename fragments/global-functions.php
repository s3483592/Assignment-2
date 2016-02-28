<?php

session_start();



## I recived help from the Chat 9 discussion and the code examples##
### -- cart functions -- ##

if ( ! isset($_SESSION['cart'])) {  
        $_SESSION['cart'] = array();           
    }
    
function addToCart($product_id){
   
   if (!isset($_SESSION['cart'][$product_id])) {
       $_SESSION['cart'][$product_id] = 1;
   }else {
      $_SESSION['cart'][$product_id] += 1;
   }
   
}

function updateCart($product_id, $qty){
  $_SESSION['cart'][$product_id] = $qty;
}

function removeItem($product_id){
  unset($_SESSION['cart'][$product_id]);
}


function getDetails($product_id){
  $tempProduct = array();
  
  if ($product_id == 'SA') {
      $tempProduct['product_name'] = 'Standard Adult';
      $tempProduct['product_price'] = 12;

  }
  elseif ($product_id == 'SP') {
      $tempProduct['product_name'] = 'Standard Concession'; 
      $tempProduct['product_price'] = 10;

  }
  elseif ($product_id == 'SC') {
      $tempProduct['product_name'] = 'Standard Child'; 
      $tempProduct['product_price'] = 8;

  }
  elseif ($product_id == 'FA') {
      $tempProduct['product_name'] = 'First Class Adult'; 
      $tempProduct['product_price'] = 25;

  }
  elseif ($product_id == 'FC') {
      $tempProduct['product_name'] = 'First Class Child'; 
      $tempProduct['product_price'] = 20;

  }
  elseif ($product_id == 'B1') {
      $tempProduct['product_name'] = 'Beanbag'; 
      $tempProduct['product_price'] = 20;

  }
  return $tempProduct;
}

function calculateCart(){
  $cart = $_SESSION['cart'];
  $price = 0;
  
  
  foreach($cart as $product_id => $qty){
    $product_details = array();
    $product_details = getDetails($product_id);
    
    $price += $qty * $product_details['product_price'];
  }

  return $price;
}

function writeOrders($fname, $sname, $price, $email, $Phone_number){
  $filehandle = fopen("orders.txt", "a");
  $cart = array();
  $cart = $_SESSION['cart'];
  $cart_string = "";
  
  $order_details = array();
  
  
  $order_details[] = $fname;
  $order_details[] = $sname;
  $order_details[] = $price;
  $order_details[] = $email;
  $order_details[] = $Phone_number;

  
  
  foreach($cart as $product_id => $product_qty){
    $product_details = array();
    $product_details = getDetails($product_id);
    $cart_string .= ":".$product_details['product_name']."=".$product_qty;
  }
  
  $order_string = implode("|", $order_details);
  
  $order_string .= $cart_string;
  
  fwrite($filehandle, "$order_string\n");
  
  fclose($filehandle);

}

    ?>