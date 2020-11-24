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
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-40%,-50%);
  color: #d27979;
  
  width: 400px;
  height: 530px;
  padding: 30px;  
  border: 2px solid;
   border-radius: 1.5em;
}
.login-box h1{

  float: center;
  font-size: 60px;
  border-bottom: 3px solid #862d2d;
  margin-bottom: 40px;
  padding: -3px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 40px;
  padding: 6px 0;
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

.btn{
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

<div class="login-box">
<h1 align="center">  التسجيل</h1>
	
 <form method="post" >

<div class="textbox">
 <i class="fas fa-user"></i>
  <input type="text"  name="username" placeholder="الاسم الاول" required /><br />
   </div>
	 
   <div class="textbox">
   <i class="fas fa-user"></i>
  <input type="text" name="username"placeholder="الاسم الثاني" required /><br />
   </div class="textbox">
	 
   <div class="textbox">
    <i class="fas fa-lock"></i>
   <input type="password" name="password" placeholder="كلمة السر" required /><br />
   </div>
	 
   <div class="textbox">
    <i class="fas fa-envelope-square"></i>
<input type="email" name="email" placeholder="الايميل " required /><br />
   </div>
	 
   <div >
   <button type="submit" class="btn" name="signup" <a href = "hhome.php" > الانضمام </a></button>
   </div>
	
</form>
</div>



<?php
require 'db.php';


// هنا اضفنا دالة الشرط للتحقق من ضغط زر signup
if(isset($_POST['signup'])){
	// عند تحقق الضغط يتم تخزين حقول البيانات فى متغيرات 
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	
	// هنا قمنا بانشاء استعلام لقاعدة البيانات لاضافة بيانات العضو الى الجدول
	// عامود id يتم ملئه اوتوماتيكيا كما اخترنا فى البدايه
	$qu = "insert into users (username,password,email) value ('$user','$pass','$email')";
	
	// التحقق من نجاح الاستعلام 
	if(mysqli_query($con, $qu)){
		echo 'تم انشاء الحساب بنجاح يمكنك تسجيل الدخول الان';
		
	}
	
}

?>
