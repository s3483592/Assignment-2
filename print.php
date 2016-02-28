<?php require('fragments/global-functions.php') ?>

<!DOCTYPE html>
<html>

<?php require('fragments/head.php') ?>


<body>
    <?php require('fragments/header.php') ?>
        
        <?php 
        writeOrders($_POST['fname'], $_POST['sname'], calculateCart(), $_POST['email'], $_POST['Phone_number']);
        $cart = $_SESSION['cart'];
            echo "<h2>Your order has been successfully submitted</h2>";
            echo "<p>Name: ".htmlentities($_POST['fname'])." ".htmlentities($_POST['sname'])."</p>";
            echo "<p>Email: ".htmlentities($_POST['email'])."</p>";
            echo "<p>Phone Number: ".htmlentities($_POST['Phone_number'])."</p>";
            echo "<h3>Cart Contents</h3>";
            echo "<table name='checkout_table' class='checkout_table'>";
            echo "<th>Ticket Type</th><th>Quantity</th>";
            foreach($cart as $product_id => $product_qty){
              $product_details = array();
              $product_details = getDetails($product_id);        
            echo "<tr><td>".htmlentities($product_details['product_name'])."</td><td>".htmlentities($product_qty)."</td></tr>";
            }
            echo "<br/>";
            echo "<br/>";
            echo "<br/>";
            echo "<tr class='checkout_total_row'><td colspan='2'>Total: $".htmlentities(calculateCart()).".00</td></tr>";
            echo "</table>";
            unset($_SESSION['cart']); 
        
        
        
         ?>
   <?php require('fragments/footer.php') ?>
</body>

</html>