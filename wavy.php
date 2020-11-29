 
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
</br>

<h2 class ="type"> أنماط الشعر </h2>

<div class="body">

<div class="type">
<h1 > النمط الثاني: الشعر المموج Wavy Hair </h1>
<img src="https://i.ibb.co/NNN6JRf/image.png" alt="wave image" >
    
<p> 
يكون الشعر المموج ما بين الشعر الأملس والمجعد. كما أنه يضفي لمعانًا أكثر من الشعر المجعد ، ولكن أقل من الشعر الأملس. كلما كثرت التموجات كلما قل لمعان الشعر. عادة ما يكون الشعر المموج أكثر عرضة للتطاير.  
</P> </div>
<h3 class="type"> هناك 3 أنواع فرعية للشعر المموج: </h3>
<div class="type">
<h3> Wave 2A: </h3>
<p> يميل لكونه مستقيماً الى حدٍ ما مع تموجات غير محددة في نهاية شعرك ,ويمكن فردة بسهولة ويمكنك الابتعاد عن كريمات ومصففات الترطيب لجعل تموجات شعرك أوضح </p>
<br> </div> <div class="type">
<h3> Wave 2B </h3>
<p> يحتوي على تجعدات أكثر وضوح وبروز ولاتبدأ من فروة الرأس ,قد يتطلب فردة مزيداً من الجهد ولكن يمكنك جعل تمويجات شعرك أكثر وضوحاً .</p>
<br> </div> <div class="type">
<h3> Wave 2C:</h3>
<p>
هذا النوع يحتوي على شعر بتموجات واضحة وتكون أكثر قربًا لفروة الرأس ,كما انه يجمع بين الشعر "الويفي" و"الكيرلي" حيث يتجعد بسرعة في البيئة الرطبة ويتميز بكثافة وتموجات سميكة بشكل عام
</p>
<img src="https://i.ibb.co/bWytZCT/photo.jpg" alt="wavy hair photo" height ="350" width="350" > 
    </div> </div>
</body>

