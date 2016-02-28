<?php 
include_once('fragments/plist.php') 
?>
 <?php 
 
 
 if(isset($_POST['Movie'])){$_SESSION['movie'] = $_POST['Movie'];}
 if(isset($_POST['Day'])){$_SESSION['day'] = $_POST['Day'];}
 if(isset($_POST['Time'])){$_SESSION['time'] = $_POST['Time'];}
 if(isset($_POST['Seat'])){$_SESSION['seat'] = $_POST['Seat'];}    
 ##if(isset($_POST['qty'])){$_SESSION['cart']['qty'] = $_POST['qty'];} 

if(isset($_POST['order'])){
  if(isset($_POST['product_id'])){
    $product_id = $_POST['product_id'];
    addToCart($product_id);
  }
}

?>

<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a class="active" href="booking.php">Booking</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
    </nav>
 <div class="content-full-height">
<div class="container-main">
            <h2> Booking</h2>
            </div>

<div class="container-flex">
<form method="POST" action="booking.php">
        <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product1']['id']);?>" />
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
        <button type="submit" name="order">add</button>
        </form>
        <form method="POST" action="booking.php">
        <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product2']['id']);?>" />
        <label>Ticket Type</label>
        <select name="Ticket">
                <option><?php print_r($PRODUCT['product2']['Ticket']);?></option>
            </select><br/>
            <label>Price</label>
        <select name="Price">
                <option><?php print_r($PRODUCT['product2']['Price']);?></option>
            </select><br/>
            <label>Seat</label>
            <select name="Seat">
                <option>A-01</option>
                <option>A-02</option>
                <option>A-03</option>
                <option>A-04</option>
                <option>A-05</option>
            </select><br/>
        <button type="submit" name="order">add</button>
        </form>

    <form  method="post" action="cart.php">
    <button>Checkout</button>
    </form>
</div>
</div>
        
