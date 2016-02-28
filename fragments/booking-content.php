<?php 
include_once('fragments/plist.php') 
?>
 <?php 
 
 
 if(isset($_POST['Movie'])){$_SESSION['movie'] = $_POST['Movie'];}
 if(isset($_POST['Day'])){$_SESSION['day'] = $_POST['Day'];}
 if(isset($_POST['Time'])){$_SESSION['time'] = $_POST['Time'];}
 
 if(isset($_POST['Ticket'])){$_SESSION['cart']['Ticket'] = $_POST['Ticket'];}
 if(isset($_POST['Price'])){$_SESSION['cart']['Price'] = $_POST['Price'];}
 if(isset($_POST['Seat'])){$_SESSION['cart']['Seat'] = $_POST['Seat'];}    
 if(isset($_POST['qty'])){$_SESSION['cart']['qty'] = $_POST['qty'];} 
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
        <input type="hidden" name="TEST" value="SA" />
        <input type="hidden" name="id" value="SA" />
        <label>Ticket Type</label>
        <select name="Ticket">
                <option>Ticket 1</option>
            </select><br/>
            <label>Price</label>
        <select name="Price">
                <option>12</option>
                <option>15</option>
            </select><br/>
            <label>Seat</label>
            <select name="Seat">
                <option>A-01</option>
                <option>A-02</option>
                <option>A-03</option>
                <option>A-04</option>
                <option>A-05</option>
            </select><br/>
        <input type="text" name="qty" value="0" placeholder="0">
        <button type="submit" name="product1">Add</button>
        </form>

    <form  method="post" action="checkout.php">
    <button>Checkout</button>
    </form>
</div>
</div>
        
