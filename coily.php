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
<li> <a href="curly.php">الشعر المجعد</a> </li>
<li> <a href="#">الشعر شديد التجعيد</a> </li>
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

<h2 class ="type"> أنماط الشعر </h2> 
<div class="body"> 
  <div class="type">
<h1>  النوع الرابع: الشعر شديد التجعد Kinky Hair </h1>
<img src="https://i.ibb.co/KbnDc2R/coily.png" alt="coily" >
<p> 

يمكن أن يحتوي الشعر المتعرج على مزيج من التركيبات التي تتراوح من نمط ملفوف بإحكام ، يشبه الزنبرك
(شكل S) إلى نمط متعرج لا يلتف حول نفسه (شكل Z) 
لا تستطيع زيوت فروة الرأس ترطيب خصل شعرك بسهولة ، مما يجعل الشعر من النوع 4 أكثر أنواع الشعر هشًا وجفافًا وتلفًا  
لذلك يحتاج إلى عناية كبيرة، يبدو خشنًا ولكنه في الحقيقة هش وناعم تمامًا ، ويتقلص هذا النوع من الشعر بشدة. 

</p>
    </div>  
    <div class="type">
<h3> هناك 3 أنواع فرعية للشعر شديد التجعًد: </h3>

<img src="https://i.ibb.co/WDpDGPG/D8-A3-D9-86-D9-88-D8-A7-D8-B9-D8-A7-D9-84-D8-B4-D8-B9-D8-B1-D8-A7-D9-84-D8-B4-D8-B9-D8-B1-D8-A7-D9-8.png" alt="KinkyHair" >
<br> </div>
<div class="type">
<h3> kiky 4A:</h3> 
<p> هذا النوع من الشعر ملفوف جيدًا من الجذور وحجمه ولفاته حلزونية كما تأخذ عادة شكلًا محددًا. هذا الشعر هش ورقيق وضعيف، ويحتاج إلى الكثير من العنايةوالترطيب<p>
<br> </div>  <div class="type">
<h3> kiky 4B:</h3>
<p> هذا الشعر تعرجاته حادة، فهي تأخذ شكل حرف Z متعرج ولا يشكل لفات لولبية او حلزونية بل تعرجات حادة فقط، وهو سهل التحديد. يمكنه ان يظهر بشكل مكثف وثقيل لكنه عكس ذلك فهو رقيق للغاية والنوع الأضعف من أنواع الشعر كلها ويحتاج الى حرص وعناية كبيرتين للحفاظ عليه . </p>
<br> </div>  <div class="type">
<h3> kiky 4C:</h3> 
<p>وهذا النوع ملفوف لفات صغيرة جدا ,يمكن ان تكون رقيقة جدا وكثيفة و أحيانا يكون ضعيف أو هش. هذا النوع هو الأصعب للعناية؛ فهو صعب التمشيط لأن انكماشه هو الأشد من جميع الأنواع.ويحتاج هذا النوع الى الترطيب والترطيب والكثير من الترطيب..  </p>
<br> 
 </div> <div class="type">
<img src="https://i.ibb.co/xqvNx0x/photo.jpg" alt="coily hair photo" height="350" width="350" > 
</div>
    </div>
</body>
</html>
