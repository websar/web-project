
<?php
	$con = mysqli_connect("localhost","root" ,"","HairDB")
  or die( mysqli_connect_error() );
		 echo "ok";
		mysqli_query($con,"CREATE TABLE user(
		ID INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		Fname VARCHAR(30),
		Lname VARCHAR(30),
		Email VARCHAR(100),
		PASS INT)")
	or die( mysqli_connect_error()); 
	

		
	?>

