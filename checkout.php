<?php require('fragments/global-functions.php') 
    ?>
<!DOCTYPE html>
<html>

<?php require('fragments/head.php') ?>


<body>
    <?php require('fragments/header.php') ?>
     
   
     	            <div id='summary'>
	                <h2>Cart</h2>
                    <?php 
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
     ?>
	                <?php
	                    $total = 0;
	                ?>
	                <?php foreach ($_SESSION['cart'] as $product) { ?>
	                    <div class='product'>
	                        <ul>
	                            <?php
	                                $price = $product['price'] * $product['qty'];
	                                $total += $price;
	                            ?>
	                            <?php foreach ($product as $key => $value) { ?>
                                    <li>
                                        <label><?php echo $key; ?>: </label>
                                        <span class="<?php echo $key; ?>"><?php echo $value; ?></span>
                                    </li>
	                            <?php } ?>
                                <li class='buttons'>
                                    <a class='fa fa-plus add' href="?submit=add&id=<?php echo $product['id']; ?>"></a>
                                    <a class='fa fa-minus minus' href="?submit=remove&id=<?php echo $product['id']; ?>"></a>
                                </li>
	                        </ul>
	                    </div>
	                <?php } ?>
	                <div id='total'>
	                    <span>Total Price: $<?php echo $total; ?></span>
	                </div>
                </div>
        
   <?php require('fragments/footer.php') ?>
</body>

</html>