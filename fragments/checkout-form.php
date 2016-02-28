          <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="content-full-height">
        <div class="container-main">

            <h2> Complete Reservation</h2>
                <form class="contact-form" action="print.php" method="POST" name="contact-form">
                    
        <fieldset>
            <br/>
            <label>Price: $<?php echo htmlentities(calculateCart());?>.00</h3>
            <label>First Name: </label>
            <input type="text" name="fname" id="fname" required oninvalid="this.setCustomValidity('Please Enter Your First Name')"/>
            <label>Surname: </label>
            <input type="text" name="sname" id="sname" required oninvalid="this.setCustomValidity('Please Enter Your Surname')"/>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Your Email Address" required oninvalid="this.setCustomValidity('Please Enter a valid email address')">
            <label>Phone Number: </label>
            <input type="text" name="Phone_number" id="Phone_number" required oninvalid="this.setCustomValidity('Please Enter Your Phone Number')"/>
            <input type="submit" name="submit">
       </fieldset>
    </form>
        </div>
            

    </div>
    <?php require('fragments/footer.php') ?>
          