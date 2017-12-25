<?php include "header.php" ?>
				<div class="register">
				<div class="container">

       <h2></h2>

       <div class="col-md-6  register-top-grid">
				 <body><background="image.jpg">
					<marquee><h2> WELCOME TO RCCG LOVE ASSEMBLY MODEL PARISH</h2></marquee>
					<h3>Personal Information</h3>
					<form method="post" action="signup_min.php">
					<div>
						<span>Title</span>
					<select name="title">
  						<option value="mr">Mr</option>
 						 <option value="mrs">Mrs</option>
 					</select>
 					</div>
 				     <div>
    				     <span>Name</span>
						<input type="text" name="name" required> 
					</div>
					<div>
						<span>Surname</span>
						<input type="text" name="surname" required> 
					 </div>
					 <div>
						 <span>Email</span>
						 <input type="text" name="email" required> 
					</div>
					<div>
						<span>Phone Number</span>
						<input type="text" name="phone"  required>  
					 </div>
					<div>
						<span>Date Of Birth</span>
						<input type="date" name="dob"  required> 
					</div>
					<div>
						<span>Marital Status</span>
						<select name="marital_status">
  						<option value="married">Married</option>
 						 <option value="single">Single</option> 
 					</select>
 					</div>
					<div>
						<span>Designation</span>
						<select name="designation" required>  
					 </div>
  						<option value="Area_Pastor">Area Pastor</option>
 						 <option value="Parish_Pastor">Parish Pastor</option>
  						<option value="Alter_Minister">Alter Minister</option>
  						</select> 
					 </div>
					 <div>
						<span>Department</span>
						<input type="text" name="department"  required>  
					 </div>
					 <div>
						<span>House Address</span>
						<input type="text" name="address"  required>  
					 </div>
					 <div>
						<span>Occupation</span>
						<input type="text" name="occupation"  required> 
					 </div>
  
        <button type="submit" class="btn btn-default">Sign up</button>
      </div>
    </div>
  </form>
</div>



				<!-- footer -->
	<?php include "footer.php" ?>
	
	<!-- footer -->
</body>
</html>