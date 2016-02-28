<?php require('fragments/global-functions.php') 
    ?>
    <?php 
include_once('fragments/plist.php') 
?>
    <!DOCTYPE html>
    <html>

    <?php require('fragments/head.php') ?>


        <body>
            <?php require('fragments/header.php') ?>

<?php 

if(isset($_POST['update'])){
  if(isset($_POST['qty']) && $_POST['qty'] != "" && is_numeric($_POST['qty'])){
    updateCart($_POST['product_id'], $_POST['qty']);  
  }
}

if(isset($_POST['delete'])){
  removeItem($_POST['product_id']);
}

?>

                <div id='summary'>
                    <h2>Cart</h2>
                    <?php 
     $shopping_cart = array();
$shopping_cart = $_SESSION['cart'];
     ?>
                           <?php
         
         //Prints a message if the users shopping cart is empty, else it displays a table with the users cart
        if(empty($shopping_cart)){
          echo "<h2>Shopping cart is empty</h2>";
        }else{
          //Prints out the shopping cart table
          echo "<table class='cart_table'>";
          echo "<tr><th>Ticket Type</th><th>Price</th><th>Quantity</th><th colspan='2'>Manage Cart</th>";
          foreach($shopping_cart as $product_id => $product_qty){
            $product_details = array();
            $product_details = getDetails($product_id);
            echo "<tr>";
            echo "<td><a href='./product.php?product_id=".$product_id."'>".htmlentities($product_details['product_name'])."</a></td>";
            printf("<td>$%d.00</td>", $product_details['product_price']);
            echo "<form id='cart_form' method='post' action=".$_SERVER['PHP_SELF'].">";
            echo "<input type='hidden' name='product_id' value='".htmlentities($product_id)."'/ >";
            echo "<td><input type='text' name='qty' value='".htmlentities($product_qty)."'/></td>";
            echo "<td><input type='submit' value='Update Cart' name='update'/></td>";
            echo "<td><input type='submit' value='Remove Item' name='delete'/></td>";
            echo "</form>";
            echo "</tr>";
          }
          printf("<tr><td colspan='6' class='cart_total_row'>Total: $%s.00</td></tr>", htmlentities(calculateCart()));
          echo "</table>";
          echo "    <form  method='post' action='checkout.php'><button>Checkout</button></form>";
        }

      ?>

                            <?php require('fragments/footer.php') ?>
        </body>

    </html>