 
<?php
		  
require 'Hairdb.php';
?>
<!DOCTYPE html>
 <html lang="ar-sa" dir="rtl">
   
<head>
<title> the boeuty of natural hair </title>

<link rel="stylesheet" href= "sttyy.css">

<style>
#imga{
display:block;
margin-left :auto;
margin-right : auto;}
a{
	text-decoration:none;
	color: black;

}
</style>
</head>

<body>
<img src="https://i.ibb.co/DGsxhPg/30953635-6928-48cc-ae17-975e36a31c7d.jpg" alt="the beauty of natural hair" height ="150" width="150">

 <form action="search.php" method="POST" class ="search">
 <input class ="insearch" type="text" name="search" placeholder="...بحث">
 <button class ="sbutton" type="submit" name="submit-search"> بحث </button>
</form>


</br>
<nav>

<ul>
<li> <a href="hhome.php"> الرئيسية </a> </li>
<li> <a href="hair type.php">أنواع الشعر </a> </li>
<li> <a href="#">انماط الشعر</a>
 <ul>
 <li> <a href="hair pattren.php" >أنماط الشعر</a> </li>
<li> <a href="stright.php" >الشعر الأملس</a> </li>
<li> <a href="wavy.php" >الشعر المموج</a> </li>
<li> <a href="curly.php">الشعر المجعد</a> </li>
<li> <a href="coily.php">الشعر شديد التجعيد</a> </li>
 </ul>
 </li>
<li><a href="mm.php">المسامية </a></li>
<li> <a href="care.php"> العناية بالشعر </a>
<ul>
<li> <a href="problem.php"> مشاكل الشعر </a></li>
<li> <a href="care.php"> العناية بالشعر </a></li>
</ul>
 </li>
<li> <a>
<?php 
if(isset($_SESSION['Email'])){
	$sql = "SELECT Fname,Lname FROM user where Email like '$_SESSION[Email]' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
echo "أهلاً: " . $row["Fname"]." ".$row["Lname"];
}}
/*تم اخذ المساعدة في هذا الكود*/
else{
	
	echo '<a href="log.php"> تسجيل الدخول </a>';
}
?> 
 </a></li>
</ul>
</nav>
<div class="search-container">
 <?php
 $conn=mysqli_connect("localhost","root","","searchdb");
       $sql = "SELECT * FROM search";
       $result = mysqli_query($conn,$sql);
       $queryResults = mysqli_num_rows($result);
     
	 if ( $queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
			
          echo "  ";
        }
      }
   ?>
</div>


</br>
<div id="pattren">
<h1>أنماط الشعر </h1>
<p>  يعد نظام نظام أندريه ووكر من أكثر الأنظمة استخدامًا لتصنيف الشعر ، وهذا النظام  تم تصميمه من قبل مصفف شعر أوبرا وينفري، أندريه ووكر ،  وفقًا لتنصيف هذا النظام  ، هناك أربعة أنواع من الشعر: 

<h3>تنقسم أنماط الشعر الى أربعة أنماط, وكل نمط ينقسم أيضاً الى فئات فرعية بناءً على ضيق ووسع اللفات </h3>
<img id="imga" src="https://i.ibb.co/LP7jYH2/dd822a46-2676-4b20-9eab-958764ebafae.jpg" alt="صور لانواع الشعر" width="200"height="400">
</br>
</br>
<h2>سنتحدث هنا عن كل نمط ,وعن كيفية العناية وطرق تصفيفه<h2>
<br>
<ol>
<a href="stright.php"> <li>الشعر المستقيم/الستريت </li> </a>
<a href="wavy.php"> <li> الشعر المموج/الويفي </li> </a>
<a href="curly.php"> <li> الشعر المجعد/الكيرلي</li></a>
<a href="coily.php"> <li>الشعر شديد التجعيد/كنكي او كويلي</li> </a>
</ol>
</div> 
</body>
</html>