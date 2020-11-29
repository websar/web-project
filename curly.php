 <!-- جميع الصور التي تم أستخدامها في البروجكت قد أخذت من بنترست أو قوقل,,وفي الغالب لانعلم تنسب لحقوق من-->
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

 <form action="search.php" method="POST" class ="search">
 <input class ="insearch" type="text" name="search" placeholder="...بحث">
 <button class ="sbutton" type="submit" name="submit-search"> بحث </button>
</form>


<br>
<nav>

<ul>
<li> <a href="hhome.php"> الرئيسية </a> </li>
<li> <a href="hairtype.php">أنواع الشعر </a> </li>
<li> <a href="hairpattren.php">انماط الشعر</a>
 <ul>
 <li> <a href="hairpattren.php" >أنماط الشعر</a> </li>
<li> <a href="stright.php" >الشعر الأملس</a> </li>
<li> <a href="wavy.php" >الشعر المموج</a> </li>
<li> <a href="#">الشعر المجعد</a> </li>
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
<li> 
<?php 
if(isset($_SESSION['Email'])){
	$sql = "SELECT Fname,Lname FROM user where Email like '$_SESSION[Email]' ";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
echo '<a href="" >مرحبا:'
.$row["Fname"]." ".$row["Lname"].'</a>';
}}
/*تم اخذ المساعدة في هذا الكود*/
else{
	
	echo '<a href="log.php"> تسجيل الدخول </a>';
}
?> 
 </li>
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


<br>
<br>
<div id="seq">
<h2 class="type"> أنماط الشعر </h2> 
<div class="body"> 
   <div class="type">
<h1> النمط الثالث : الشعر المجعد  Curly Hair </h1>
<img src="https://i.ibb.co/bWG0HJh/curly.png" alt="curly">
<p> هذا النوع من الشعر يحتوي على خصل تدور حول نفسها مثل الزنبرك و يصنف حسب درجة إلتفافه وهو يتراوح بين المموج والمجعد. وهو جاف وحسّاس جدًا ويحتاج إلى عناية كبيرة</p>
</div> <div class="type">
<h3> هناك 3 أنواع فرعية للشعر المجعد: </h3>
</div> <div class="type">
<h3>curly 2A</h3>
<p>يكون مموج ويحتوي على تجعيدات عريضه وهو النوع الأكثر رطوبة من الأنواع الثلاثة، وهو سميك وصحي . </p>
 <br></div> <div class="type">
<h3>curly 2B</h3>
<p>هذا النوع اكثر عرضة للتجعيد والجفاف, وتبدأ اللولبات من فروة الرأس ..للحفاظ على شكلها اللولبي الرائع تحتاج الى ترطيب الشعر  </p>
<br></div> <div class="type">
<h3>curly 2C</h3>
<p>

هذا النوع أرق من النوعين السابقين لكن خصلة الشعر أصغر، مما يجعله يبدو أكثر سماكة وتجعيداته تكون ضيقة للغاية هذه اللفائف تبدأ تشكلها من الجذور ويكون عرضة للجفاف والنفشة والكسر. ، البعض يعتبر هذا النوع من الشعر المجعد والبعض يعتبره شديد التجعيد. بدلًا من التمشيط ، الذي قد يؤدي إلى تجعد الشعر وتقصفه ، استخدمي بلسم يترك على الشعر واحرصي على ترطيب شعرك باستمرار. </p>

<img src="https://i.ibb.co/Dw7dCCh/photo.jpg" alt="curly hair photo" height ="350" width="350"> </div>
</div> </div>
</body>
</html>
