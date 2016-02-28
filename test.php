   
   ## This goes back to booking content
   
    <form method="POST" action="booking.php">
        <input type="hidden" name="id" value="<?php print_r($PRODUCT['product1']['id']);?>" />
        <label>Ticket Type</label>
        <select name="Ticket">
                <option><?php print_r($PRODUCT['product1']['Ticket']);?></option>
            </select><br/>
            <label>Price</label>
        <select name="Price">
                <option><?php print_r($PRODUCT['product1']['Price']);?></option>
            </select><br/>
            <label>Seat</label>
            <select name="Seat">
                <option>A-01</option>
                <option>A-02</option>
                <option>A-03</option>
                <option>A-04</option>
                <option>A-05</option>
            </select><br/>
        <button type="submit" name="Submit">add</button>
        </form>

    <form  method="post" action="checkout.php">
    <button>Checkout</button>
    </form>
    
    ## This goes back to the checkoutpage
    
    $price = $_SESSION['cart']['Price'];
     $qty = $_SESSION['cart']['qty'];
     $total = $price * $qty;
     
     print_r($_SESSION['movie']);
     echo '<br/>';
     print_r($_SESSION['day']);
     echo '<br/>';
     print_r($_SESSION['time']);
     echo '<br/>';
     print_r($_SESSION['cart']['Ticket']);
     echo '<br/>';
     echo "$"; print_r($_SESSION['cart']['Price']);
     echo '<br/>';
     print_r($_SESSION['cart']['Seat']);
     echo '<br/>';
     print_r($_SESSION['cart']['qty']);
     echo '<br/>';
     echo 'Total Price: '; echo $total;