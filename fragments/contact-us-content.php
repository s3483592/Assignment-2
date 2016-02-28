<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a class="active" href="contact-us.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="content-full-height">
        <div class="container-main">

            <h2> Contact Us</h2>
                <form class="contact-form" action="print.php" method="POST" name="contact-form">
        <fieldset>
            <label>Email</label><br/>
            <input type="email" name="email" placeholder="Enter Your Email Address" required oninvalid="this.setCustomValidity('Please Enter a valid email address')"><br/>
           <label>Subject</label><br/>
            <select class="contact-select" name="subject">
                <option>General Enquiries</option>
                <option>Group and Corporate Bookings</option>
                <option>Suggestions and Complaints</option>
            </select><br/><br/><br/>
           <label>Message</label><br/>
            <textarea class="textarea-contact" name="message" placeholder="Type your message here..." required oninvalid="this.setCustomValidity('This message cannot be blank')"></textarea><br/>
            <input type="submit"><br/>
       </fieldset>
    </form>
        </div>
            

    </div>
    <?php require('fragments/footer.php') ?>