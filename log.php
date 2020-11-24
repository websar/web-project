<!DOCTYPE html>
 <html lang="en"> 
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<style>
@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(https://i.pinimg.com/564x/4e/50/85/4e5085e1555e80695bada1f1283986a9.jpg);
  background-repeat : no-repeat;
  background-color: #fafafa; 	
}

.login-box{
 
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #d27979;
  width: 300px;
  height: 500px;
  padding: 30px;  
  border: 2px solid;
   border-radius: 1.5em;
  

}
.login-box h1{
  float: left;
  font-size: 60px;
  border-bottom: 3px solid #862d2d;
  margin-bottom: 50px;
  padding: 5px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 40px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #862d2d;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: #d27979;
  font-size: 38px;
  width: 80%;
  float: left;
  margin: 0 10px;
}

.btn {
    
  width: 100%;
  background: none;
  border: 2px solid #862d2d;
  color: #d27979; 
  padding: 10px;
  font-size: 50px;
  cursor: pointer;
  margin: 12px 0;
    border-radius: 1.5em;
	 font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
      
    }
	    a:link {
  color: #d27979 ;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: #862d2d;
  background-color: transparent;
  text-decoration: underline; 
 
}

</style>
</head>
<body>

<form method="post" >
<div class = "login-box">
<h1>تسجيل الدخول</h1>
<div class="textbox" >
<i class="fas fa-envelope-square"></i>
  <input type="email" name="email" placeholder="الايميل " /><br />
</div>

<div class="textbox">
<i class="fas fa-lock"></i>
   <input type="password" name="password" placeholder="كلمة السر" /><br />
   </div>
   
   <button type="submit" class = "btn"name="login"> تسجيل دخول </button>

   <button type="submit" class="btn" name="signup" <a href = "sign.php" > !انشاء حساب </a></button>

   </div>
</form>

<p> </p>
</div>
</body>
</html>

<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require 'db.php';
// فتح جلسه
session_start();

// دالة الشرط للتحقق من ضغط زر login
if(isset($_POST['login'])){
	// تخزين الحقول فى متغيرات
	$user = $_POST['username'];
	$pass = $_POST['password'];
	
	// انشاء استعلام
	// فى هذا الاستعلام استخدمنا الشرط وجود اسم المستخدم وكلمة المرور
	$qu = "select * from users where username = '$user' && password = '$pass'";
	
	// ارسال الاستعلام والتحقق من وجود العضو
	if(mysqli_num_rows(mysqli_query($con, $qu)) > 0){
		// اذا تم وجود النتيجة يتم اضافة اسم العضو فى الجلسه 
		$_SESSION['username'] = $user;
		// ثم يتم الانتقال الى منطقة الاعضاء
		header("Location: cp.php");
	} else {
		// اذا لم يتم ايجاد اى قيمه 0
		echo 'اسم المستخدم او كلمة المرور حطأ';
		
	}
	
	
}
?>
