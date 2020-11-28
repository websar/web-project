
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
<div id="porosity">
  <h1>مسامية الشعر</h1>
  <h3>ما هي مسامية الشعر؟</h3>
  <h3>تشير مسامية الشعر إلى مدى قدرة الشعر على امتصاص الرطوبة والإحتفاظ بها </h3>
<img src="https://i.ibb.co/Qmq528m/6de7fe0a-d97c-4043-aa3c-5109df0e5d42.jpg" alt="انواع المسامية" width="400"height="200"  >
  <h3> معرفة مسامية الشعر مهم لأختيار المنتجات المناسبة لشعرك </h3>
  <h3>نستطيع معرفة مسامية الشعر بأكثر من طريقة;
  اختبار مسامية الشعر هو أحدى الطرق المشهورة لمعرفة مسامية الشعر </h3>
  <h4>
يتطلب هذا الاختبار كوب من الماء وخصلة من شعرك, قومي بوضع خصلة من شعرك في الكوب وانتظري لعدة ثواني لتري موقع الخصلة في الكوب
</h4>
<img src="https://www.jammelah.com/wp-content/uploads/2018/07/understanding_hair_porosity_ai1-1.jpg" alt="ثلاث اكواب"
width="400"height="200">
<h3>الخصلة على سطح المياه:</h3>
<img src="https://amp.jamalouki.net/uploads/richTextEditor/default_richTextEditor/8f0/08be418b2caa16f6b301f29c307e250f.jpeg" alt="خصلةعلىسطح الكأس"
width="300"height="200">
<h4> إن بقيت خصلتكِ عائمة على سطح الماء، فأنتِ إذاً تتمتّعين بمستوى منخفض من مسامية الشعر أو Low Hair Porosity. </h4>
<h4>إلى ماذا يشير هذا في ما يتعلّق بصحّة شعركِ؟</h4>
<ul>
  <li>	خصلاتكِ لا تمتصّ المياه بطريقة سهلة وذلك بسبب المسامات الصغيرة المتراصّة جنباً إلى جنب. هذا الأمر يعني أن الشعر يستغرقوقتاً طويلاً لكي يتبلّل. </li>
  <li>	مكوّنات المستحضرات مثل الزيوت وغيرها لا تتغلل في عمق الخصلات بل تظلّ عالقة على سطح الشعر. </li>
  <li>	شعركِ يستغرق وقتاً طويلاً لكي يجفّ. </li>
</ul>
<h4>خطوات للعناية بهذا النوع من الشعر:</h4>
<ul>
  <li>استخدمي مستحضرات للعناية بالشعر بوزن خفيف وذلك كي تتغلّل بسهولة داخل الخصلات.</li>
  <li>استخدمي مستحضرات عناية بالشعر غنيّة بالمكوّنات المرطّبة مثل زيت الجوجوبا، زبدة الشيا وزيت جوز الهند وغيرها.</li>
  <li>طبّقي شامبو خالي من السولفات.</li>
  <li>	الجئي مرّة في الأسبوع إلى شامبو مخصّص لتنظيف الأوساخ المتراكمة على الشعر يُعرف بـClarifying Shampoo. </li>
  <li>من المفضّل أن تستخدمي مياه تميل إلى الحرارة الدافئة عند غسل الشعر.</li>
</ul>

<h3>الخصلة في وسط المياه:</h3>

<img src="https://m.jamalouki.net/uploads/richTextEditor/default_richTextEditor/c0f/e831357d0ae1a7d362c566090d4efafb.jpeg" alt="خصلة وسط الكأس"
width="300"height="200">
<h4>إن بقيت خصلة الشعر عند منتصف الكوب، فهذا يعني أنّ مستوى مسامية الشعر لديكِ هو متوسّط Medium Hair Porosity.</h4>
<h4>إلى ماذايشير هذا في ما يتعلّق بصحّة شعركِ؟</h4>
<ul>
  <li>خصلاتكِ تمتصّ الرطوبة بشكلٍ جيّد ولا تفقدها سريعاً وذلك بفضل المسامات الموجودة بطريقة متساوية في الخصلات.</li>
  <li>تتمتّعين بشعر صحّي ولستِ بحاجة للكثير من المستحضرات للعناية به.</li>
  <li>من السهل تسريح خصلاتكِ إذ أنّها غير دهنيّة وغير جافّة على حدّ سواء.</li>
</ul>
<h4>خطوات للعناية بهذا النوع من الشعر:</h4>
<ul>
  <li>واظبي على تطبيق بلسم الشعر لحماية شعركِ والمحافظة على رطوبته. </li>
<li>يمكنكِ أن تغسلي شعركِ بواسطة مياه معتدلة.</li>
<li>استخدمي قناع لتغذية الشعر مرّة في الأسبوع.</li>
</ul>

<h3>الخصلة في كعب المياه:</h3>
<img src="https://amp.jamalouki.net/uploads/richTextEditor/default_richTextEditor/bae/45529d566fd0910f63c958b008a3329d.jpeg" alt="خصلة اسفل الكأس"
width="300"height="200">
<h4>إذا غرقت خصلة الشعر إلى عمق الكوب، فهذا يعني أنّكِ صاحبة مستوى مسامية الشعر مرتفع High Porosity Hair. </h4>

<h4>إلى ماذا يشير هذافي ما يتعلّق بصحّة شعركِ؟</h4>
<ul>
  <li>مسامات الخصلات مفتوحة ممّا يعني أن شعركِ يمتصّ الرطوبة ويفقدها بسرعة فائقة.</li>
  <li>شعركِ يبدو جاف وباهت بعد بضع ساعات فقط على الإستحمام، بغضّ النظر عن المستحضر الذي قمتِ باستخدامه.</li>
  <li>خصلاتكِ تعاني من التكسّر والتشابك كما أنّكِ تواجهين مشكلة الشعر المتطاير.</li>
</ul>
<h4>خطوات للعناية بهذا النوع من الشعر:</h4>
<ul>
  <li>استخدمي مستحضرات للعناية بالشعر ترطّب خصلاتكِ من العمق، بدءً من الشامبو، بلسم الشعر والأقنعة.</li>
  <li>الجئي إلى Leave-in Conditionner للمحافظة على الرطوبة داخل الخصلات. </li>
  <li>	طبّقي مستحضرات عناية بالشعر غنيّة بالبروتينات المغذّية للخصلات.</li>
  <li>	ابتعدي عن أدوات تجفيف الشعر.</li>
  <li>	اغسلي شعركِ بواسطة مياه باردة.</li>
</ul>
</div>
  </body>
</html>