<!DOCTYPE html>
<html lang="ar" dir ="rtl">
  <head>
     <title> login </title>
	 </head>
	 
	 <body>
	 
	 <h1> تسجيل الدخول</h1>
<form  method="post">

<label>البريد الالكتروني</label>
 <input type="email" name="Email" placeholder ="example@abc.com" required >
 </br>
  <label>كلمة المرور</label>
 <input type="password" name="password" placeholder = "كلمة المرور" required >
	</br>
	<button type="submit" name="login">تسجيل الدخول</button>
	
	<a href = "sign.php"> انشاء حساب </a>
</form>
 

  </body>
		  </html>



<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require 'hairdb.php';
// فتح جلسه


// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){
	// تخزين الحقول فى متغيرات
	$email = $_POST['Email'];
	$pass = $_POST['password'];
	
	// انشاء استعلام
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from user where Email = '$email' && PASS = '$pass'";
	
	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['Email'] = $email;
		// ثم يتم الانتقال الى منطقة الاعضاء
		header("Location: hhome.php");
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		echo 'اسم المستخدم او كلمة المرور خاطأ';
	}
	
	
}
?>