<?php 
include_once('fragments/plist.php') 
?>
    <?php 
 
 
 if(isset($_POST['Movie'])){$_SESSION['movie'] = $_POST['Movie'];}
 if(isset($_POST['Day'])){$_SESSION['day'] = $_POST['Day'];}
 if(isset($_POST['Time'])){$_SESSION['time'] = $_POST['Time'];}
 if(isset($_POST['Seat'])){$_SESSION['seat'] = $_POST['Seat'];}    


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
            <div class="container-flex">

                <form class="product-form" method="POST" action="booking.php">
                    <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product1']['id']);?>" />
                    <label>Ticket Type: <?php print_r($PRODUCT['product1']['Ticket']);?></label>
                    <input type="hidden" name="Ticket" value="<?php print_r($PRODUCT['product1']['Ticket']);?>" />
                    <br/>
                    <label>Price: $<?php print_r($PRODUCT['product1']['Price']);?></label>
                    <input type="hidden" name="Price" value="<?php print_r($PRODUCT['product1']['Price']);?>" />
                    <br/>
                    <label>Seat</label>
                    <select name="Seat">
                        <option>E-01</option>
                        <option>E-02</option>
                        <option>E-03</option>
                        <option>E-04</option>
                        <option>E-05</option>
                        <option>E-10</option>
                        <option>E-11</option>
                        <option>E-12</option>
                        <option>E-13</option>
                        <option>E-14</option>                        
                        <option>F-01</option>
                        <option>F-02</option>
                        <option>F-03</option>
                        <option>F-04</option>
                        <option>F-05</option>
                        <option>F-10</option>
                        <option>F-11</option>
                        <option>F-12</option>
                        <option>F-13</option>
                        <option>F-14</option>                         
                        <option>G-01</option>
                        <option>G-02</option>
                        <option>G-03</option>
                        <option>G-04</option>
                        <option>G-05</option>
                        <option>G-10</option>
                        <option>G-11</option>
                        <option>G-12</option>
                        <option>G-13</option>
                        <option>G-14</option>                           
                        <option>H-01</option>
                        <option>H-02</option>
                        <option>H-03</option>
                        <option>H-04</option>
                        <option>H-05</option>
                        <option>H-10</option>
                        <option>H-11</option>
                        <option>H-12</option>
                        <option>H-13</option>
                        <option>H-14</option>                                                                        
                    </select>
                    <br/>
                    <button class="product-button" type="submit" name="order">add</button>
                </form>
                <form class="product-form" method="POST" action="booking.php">
                    <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product2']['id']);?>" />
                    <label>Ticket Type: <?php print_r($PRODUCT['product2']['Ticket']);?></label>
                    <input type="hidden" name="Ticket" value="<?php print_r($PRODUCT['product2']['Ticket']);?>" />
                    <br/>
                    <label>Price: $<?php print_r($PRODUCT['product2']['Price']);?></label>
                    <input type="hidden" name="Price" value="<?php print_r($PRODUCT['product2']['Price']);?>" />
                    <br/>
                    <label>Seat</label>
                    <select name="Seat">
                        <option>E-01</option>
                        <option>E-02</option>
                        <option>E-03</option>
                        <option>E-04</option>
                        <option>E-05</option>
                        <option>E-10</option>
                        <option>E-11</option>
                        <option>E-12</option>
                        <option>E-13</option>
                        <option>E-14</option>                        
                        <option>F-01</option>
                        <option>F-02</option>
                        <option>F-03</option>
                        <option>F-04</option>
                        <option>F-05</option>
                        <option>F-10</option>
                        <option>F-11</option>
                        <option>F-12</option>
                        <option>F-13</option>
                        <option>F-14</option>                         
                        <option>G-01</option>
                        <option>G-02</option>
                        <option>G-03</option>
                        <option>G-04</option>
                        <option>G-05</option>
                        <option>G-10</option>
                        <option>G-11</option>
                        <option>G-12</option>
                        <option>G-13</option>
                        <option>G-14</option>                           
                        <option>H-01</option>
                        <option>H-02</option>
                        <option>H-03</option>
                        <option>H-04</option>
                        <option>H-05</option>
                        <option>H-10</option>
                        <option>H-11</option>
                        <option>H-12</option>
                        <option>H-13</option>
                        <option>H-14</option>
                    </select>
                    <br/>
                    <button class="product-button" type="submit" name="order">add</button>
                </form>
                <form class="product-form" method="POST" action="booking.php">
                    <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product3']['id']);?>" />
                    <label>Ticket Type: <?php print_r($PRODUCT['product3']['Ticket']);?></label>
                    <input type="hidden" name="Ticket" value="<?php print_r($PRODUCT['product3']['Ticket']);?>" />
                    <br/>
                    <label>Price: $<?php print_r($PRODUCT['product3']['Price']);?></label>
                    <input type="hidden" name="Price" value="<?php print_r($PRODUCT['product3']['Price']);?>" />
                    <br/>
                    <label>Seat</label>
                    <select name="Seat">
                        <option>E-01</option>
                        <option>E-02</option>
                        <option>E-03</option>
                        <option>E-04</option>
                        <option>E-05</option>
                        <option>E-10</option>
                        <option>E-11</option>
                        <option>E-12</option>
                        <option>E-13</option>
                        <option>E-14</option>                        
                        <option>F-01</option>
                        <option>F-02</option>
                        <option>F-03</option>
                        <option>F-04</option>
                        <option>F-05</option>
                        <option>F-10</option>
                        <option>F-11</option>
                        <option>F-12</option>
                        <option>F-13</option>
                        <option>F-14</option>                         
                        <option>G-01</option>
                        <option>G-02</option>
                        <option>G-03</option>
                        <option>G-04</option>
                        <option>G-05</option>
                        <option>G-10</option>
                        <option>G-11</option>
                        <option>G-12</option>
                        <option>G-13</option>
                        <option>G-14</option>                           
                        <option>H-01</option>
                        <option>H-02</option>
                        <option>H-03</option>
                        <option>H-04</option>
                        <option>H-05</option>
                        <option>H-10</option>
                        <option>H-11</option>
                        <option>H-12</option>
                        <option>H-13</option>
                        <option>H-14</option>
                    </select>
                    <br/>
                    <button class="product-button" type="submit" name="order">add</button>
                </form>
                <form class="product-form" method="POST" action="booking.php">
                    <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product4']['id']);?>" />
                    <label>Ticket Type: <?php print_r($PRODUCT['product4']['Ticket']);?></label>
                    <input type="hidden" name="Ticket" value="<?php print_r($PRODUCT['product4']['Ticket']);?>" />
                    <br/>
                    <label>Price: $<?php print_r($PRODUCT['product4']['Price']);?></label>
                    <input type="hidden" name="Price" value="<?php print_r($PRODUCT['product4']['Price']);?>" />
                    <br/>
                    <label>Seat</label>
                    <select name="Seat">
                        <option>E-06</option>
                        <option>E-07</option>
                        <option>E-08</option>
                        <option>E-09</option>                        
                        <option>F-06</option>
                        <option>F-07</option>
                        <option>F-08</option>
                        <option>F-09</option>
                        <option>G-06</option>
                        <option>G-07</option>
                        <option>G-08</option>
                        <option>G-09</option>
                    </select>
                    <br/>
                    <button class="product-button" type="submit" name="order">add</button>
                </form>
                <form class="product-form" method="POST" action="booking.php">
                    <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product5']['id']);?>" />
                    <label>Ticket Type: <?php print_r($PRODUCT['product5']['Ticket']);?></label>
                    <input type="hidden" name="Ticket" value="<?php print_r($PRODUCT['product5']['Ticket']);?>" />
                    <br/>
                    <label>Price: $<?php print_r($PRODUCT['product5']['Price']);?></label>
                    <input type="hidden" name="Price" value="<?php print_r($PRODUCT['product5']['Price']);?>" />
                    <br/>
                    <label>Seat</label>
                    <select name="Seat">
                        <option>E-06</option>
                        <option>E-07</option>
                        <option>E-08</option>
                        <option>E-09</option>                        
                        <option>F-06</option>
                        <option>F-07</option>
                        <option>F-08</option>
                        <option>F-09</option>
                        <option>G-06</option>
                        <option>G-07</option>
                        <option>G-08</option>
                        <option>G-09</option>
                    </select>
                    <br/>
                    <button class="product-button" type="submit" name="order">add</button>
                </form>
                <form class="product-form" method="POST" action="booking.php">
                    <input type="hidden" name="product_id" value="<?php print_r($PRODUCT['product6']['id']);?>" />
                    <label>Ticket Type: <?php print_r($PRODUCT['product6']['Ticket']);?></label>
                    <input type="hidden" name="Ticket" value="<?php print_r($PRODUCT['product6']['Ticket']);?>" />
                    <br/>
                    <label>Price: $<?php print_r($PRODUCT['product6']['Price']);?></label>
                    <input type="hidden" name="Price" value="<?php print_r($PRODUCT['product6']['Price']);?>" />
                    <br/>
                    <label>Seat</label>
                    <select name="Price">
                        <option>
                            <?php print_r($PRODUCT['product6']['Price']);?>
                        </option>
                    </select>
                    <br/>
                    <label>Seat</label>
                    <select name="Seat">
                        <option>A-01</option>
                        <option>A-02</option>
                        <option>B-01</option>
                        <option>B-02</option>
                        <option>B-03</option>
                        <option>C-01</option>
                        <option>C-02</option>
                        <option>C-03</option>
                        <option>C-04</option>
                        <option>D-01</option>
                        <option>D-02</option>
                        <option>D-03</option>
                        <option>D-04</option>                         
                    </select>
                    <br/>
                    <button class="product-button" type="submit" name="order">add</button>
                </form>
            </div>
                            <form method="post" action="cart.php">
                    <button>Checkout</button>
                </form>
                </div>
        </div>