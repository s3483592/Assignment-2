
        <form  action="print.php" method="post"> <!--onsubmit="return checkForm()"-->
          <h3>Total Price: $<?php echo htmlentities(calculateCart());?>.00</h3>
    
                              
          <div class="field">
            <label>First Name: </label>
	          <input type="text" name="fname" id="fname"/>
          </div>
          <!--End field-->
          
          <div class="field">
	          <label>Surname: </label>
	          <input type="text" name="sname" id="sname"/>
          </div>
          <!--End field-->

          <div class="field">
	          <label>Email: </label>
	          <input type="email" name="email" id="email"/>
          </div>
          <!--End field-->

          <div class="field">
	          <label>Phone Number: </label>
	          <input type="text" name="Phone_number" id="Phone_number"/>
          </div>
          <!--End field-->
    
	        <div class="buttons">
            <input type="submit" value="Submit" name="submit"/>
	        </div>
          <!--End buttons-->

	      </form>

	      <!--End registration_form->
          