 
<?php
		  
require 'Hairdb.php';
?>
<!DOCTYPE html>
 <html lang="ar-sa" dir="rtl">
   
<head>
<title> the boeuty of natural hair </title>

<link rel="stylesheet" href= "sttyy.css">
</head>

<body>
<img src="https://i.ibb.co/DGsxhPg/30953635-6928-48cc-ae17-975e36a31c7d.jpg" alt="the beauty of natural hair" height ="150" width="150">

<div class="sear">
 <form action="search.php" method="POST" class ="search">
 <input class ="insearch" type="text" name="search" placeholder="...بحث">
 <button class ="sbutton" type="submit" name="submit-search"> بحث </button>
</form>

</div>
</br>
<nav>

<ul>
<li> <a href="hhome.php"> الرئيسية </a> </li>
<li> <a href="hair type.php">أنواع الشعر </a> </li>
<li> <a href="hair pattren.php">انماط الشعر</a>
 <ul>
 <li> <a href="hair pattren.php" >أنماط الشعر</a> </li>
<li> <a href="#" >الشعر الأملس</a> </li>
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
<<li> <a>
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
</br>
<h2 class="type"> أنماط الشعر </h2> 
<div class="body">
<div class="type">
<h1>النمط الأول : الشعر الأملس Straight Hair </h1>
<img src="https://i.ibb.co/g9R2cTX/image.png" alt="stright hair">
<p> </div> <div class="type">
الشعر "الستريت" يعكس الشعر الأكثر لمعانًا وكذلك الشعر الأكثر مرونة من بين جميع أنواع الشعر ، وفي هذا النوع من الشعر عادًة ما تكون خصلة الشعر مسطحة من الجذور إلى الأطراف ويكون الشعر ناعمًا ، ولامع للغاية بفضل امكانية الزيت الطبيعي المنتج في الغدد الدهنية في فروة الرأس ان ينزلق من فروة الرأس ويصل إلى الأطراف ليحافظ على ترطيب وصحة شعرك دون تداخل تجعيد الشعر أو التواءاته .
</p>
<img src="https://i.ibb.co/xL1MW8f/image.jpg" alt="stright hair image" height ="350" width="350" >
    </div>
    </div>
</body>
</head>
