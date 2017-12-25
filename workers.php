<?php include "header.php" ?>
				<div class="register">
				<div class="container">
			
				<h2>REGISTER</h2>
				 
				 <div class="col-lg-6  register-top-grid">
				 <body><background="image.jpg">
					<marquee hspace=0 width="240%"><h2>WELCOME TO RCCG LOVE ASSEMBLY MODEL PARISH</h2></marquee>
					<h3>Personal Information</h3>
					<form method="post" action="conn3.php">
					<div>
					
						<span>First Name</span>
						<input type="text" name="fname" required> 
					</div>
					<div>
						<span>Surname</span>
						<input type="text" name="surname"  required> 
					 </div>
					 <div>
						 <span>Email</span>
						 <input type="text" name="email"  required> 
					</div>
					<div>
						 <span>Date of Birth</span>
						 <input type="date" name="dob"  required> 
					</div>
					<div>
						 <span>Phone Number</span>
						 <input type="tel" name="tel"  required> 
					</div>
					<div>
						<span>Department</span>
						<input type="text" name="department"  required> 
					 </div>
					 <div>
					 <span>Gender</span>
					<select name="gender">
  						<option value="male">Male</option>
 						 <option value="female">Female</option>
 					</select>
					<div>
						 <span>House Address</span>
						 <input type="text" name="house"  required> 
					</div>
					<div>
						 <span>Occupation</span>
						 <input type="text" name="occupation"  required> 
					</div>
					   <a class="news-letter" href="#">
						<input type="submit" value="submit">
								</div>
							</form>
						</div>
				<div class="clearfix"> </div>
			</div>	
</div>			
			
	<!--  footer -->
	<?php include "footer.php" ?>
</body>
</html> 