<!DOCTYPE html>
<html lang="ar" dir ="rtl">
  <head>
  
     <title> sign up </title>

	 </head>
	 
	 <body>
	 <h1> انشاء حساب</h1>
<form action="hairdb.php" method="post">
	الاسم الاول* : 
	<input type="text" name="FirstName" placeholder = "مطلوب" required>
	<br>
	الاسم الثاني :
	<input type="text" name="LastName" placeholder = "اختياري">
	</br>
	الايميل* : 
	<input type="email" name="email" placeholder = "example@abc.com"required>
	</br>
	كلمة المرور* :
	<input type="password" name="password" required>
	
</br>
	<input type="submit" name="sign" value=" تسجيل">
	<a href = "login.html"> لدي حساب بالفعل </a>
	
</form>
  </body>
 </html> 
 
<?php	
require'hairdb'
		
		if(isset($_POST['sign'])){
	 
	$Fname = $_POST['FirstName'];
	$Lname = $_POST['LastName'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	
	$qu = "INSERT INTO user (FirstName,LastName,email,password) VALUES ('$Fname','$Lname','$email','$pass')";
	
	 
	if(mysqli_query($con, $qu)){
		echo 'تم انشاء الحساب بنجاح يمكنك تسجيل الدخول الان';
		
	}	
}

?>