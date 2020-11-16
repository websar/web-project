
<!DOCTYPE html>
<html lang="ar" dir ="rtl">
  <head>
  
     <title> login </title>

	 </head>
	 
	 <body>
	 <h1> تسجيل الدخول</h1>
<form  method="post">
 <input type="email" name="E-mail" placeholder = "example@abc.com" required >
 </br>
  
 <input type="password" name="password" placeholder = "كلمة المرور" required >
	</br>
	<input type="submit" name="login" value="تسجيل الدخول">
	<a href = "signup.html"> انشاء حساب </a>
</form>


  </body>
		  </html>
		  

<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require 'hairdb.php';
// فتح جلسه
session_start();

// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){
	// تخزين الحقول فى متغيرات
	$email = $_POST['email'];
	$pass= $_POST['password'];
	
	// انشاء استعلام
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from user where email = '$email' && password = '$pass'";
	
	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['email'] = $email;
		// ثم يتم الانتقال الى منطقة الاعضاء
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		echo 'اسم المستخدم او كلمة المرور خاطئه';
	}
	
	
}
