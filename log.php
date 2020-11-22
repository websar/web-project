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
  border-bottom: 6px solid #862d2d;
  margin-bottom: 50px;
  padding: 13px 0;
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
.btn{
  width: 100%;
  background: none;
  border: 2px solid #862d2d;
  color: #862d2d;
  padding: 5px;
  font-size: 38px;
  cursor: pointer;
  margin: 12px 0;
    border-radius: 1.5em;
}
.sign {
    
        padding-top: 19px;
        color: #d27979;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
		  width: 100%;
  background: none;
  border: 2px solid #862d2d;
  color: #862d2d;
  padding: 5px;
  font-size: 38px;
  cursor: pointer;
  margin: 12px 0;
    border-radius: 1.5em;
	
       
      
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
<div class = "all" >
<div class="login-box">
  <h1>تسجيل الدخول</h1>
  <div class="textbox">
    <i class="fas fa-envelope-square"></i>
    <input type="text" placeholder="الايميل" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="كلمة المرور" required>
  </div>

  <p  class="sign" align="center"> <a href = "hhome.php"> تسجيل الدخول </a> </p>
  <p class="sign" align="center"> <a href = "sign.php" > !انشاء حساب </a></p>
</div>
<p> </p>
</div>
</body>
</html>


<?php
// استدعاء ملف الاتصال بقاعدة البيانات
require 'hairdb.php';
// فتح جلسه



if(isset($_POST['login'])){
	
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
