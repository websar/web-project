 <!-- جميع الصور التي تم أستخدامها في البروجكت قد أخذت من بنترست أو قوقل,,وفي الغالب لانعلم تنسب لحقوق من-->
<?php
		  
require 'Hairdb.php';
?>
<!DOCTYPE html>
 <html lang="ar-sa" dir="rtl">
   
<head>
<title> the boeuty of natural hair </title>

<link rel="stylesheet" href= "sttyy.css">
<script>
    function pageRedirect() {
      window.location.href = "link.php"; 
    }      
</script>
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
<li> <a href="coily.php">الشعر شديد التجعيد</a> </li>
 </ul>
 </li>
<li><a href="mm.php">المسامية </a></li>
<li> <a href="care.php"> العناية بالشعر </a>
<ul>
<li> <a href="#"> مشاكل الشعر </a></li>
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


<br>

<h1 class="type"> مشاكل الشعر </h1> 
<div class="body">
  
<div class="type">
<h4>  مشاكل الشعر ليست مرض معين يحتاج إلى تدخل جراحي أو استخدام مستحضر دوائي، إنما هي عبارة عن أعراض تشير إلى حدوث خلل معيّ
ن وتتطلب البحث من صاحبها، فإذا تركها وتناساها أصبحت مشكلة أكبر وتعرّض للمزيد من المشاكل الإضافية، أما إذا تفهّم الأمر وبحث عن سبب
.ها فيكون قد تفادى الموقف واستطاع حلها بأسهل الطرق. </h4>

<h4> تختلف مشاكل الشعر حسب طبيعة الشعر نفسه فمن المعروف أن هناك ثلاثة أنواع مختلفة من الشعر وهم الشعر الدهني، الشعر العادي، والشعر الجاف.</h4>
    </div>
<h2 class="type"> أهم مشاكل الشعر </h2>
<div class="type">
<h3> تساقط الشعر </h3> 
<img src="https://i.ibb.co/9NDcNdS/image.jpg" alt="تساقط الشعر" width="400" height="200">
    
<h4> ومن أهم الأسباب التي تؤدي إلى تساقط الشعر ما يلي: </h4>
<ul>
<li>التّوتر. </li>
<li> التّغيّرات الهرمونيّة.</li>
<li>بعض الأدوية، مثل الأدوية المضادة للاكتئاب، أو مميعات الدم، أو حبوب منع الحمل، أو الأدوية المخفضة لضغط الدم، وغيرها. </li>
<li> بعض الأمراض مِثْل داء الثّعلبة</li>
<li> الحمل، والولادة.</li>
<li> العناية السيئة بالشعر.</li>
</ul>
<h3> علاج تساقط الشعر </h3>
<h5> بمجرد ملاحظة تساقط الشعر بشكل غير طبيعي لا بدّ من البحث عن السبب لهذا التساقط والتوجه إلى الطبيب.</h5>
<h5>فإذا كانت العوامل الوراثية هي السبب فيكون الحل الأمثل اللجوء إلى عمليات زراعة الشعر وغيرها من علاجات ينصح بها الطبيب، لأن العوامل الوراثية عامل طبيعي في الجسم لا يمكن تغييره أو علاجه. </h5>

<h5> أما إذا كان السبب هو سوء التغذية فيمكن علاجه عن طريق تناول بعض المكملات الغذائية أو بعض المغذيات والفيتامينات التي يحتاجها الجسم.</h5>

<h3>وهناك بعض النصائح التي يمكن اتباعها لتقليل تساقط الشعر: </h3>
<ul>
<li>استخدام الشّامبو المُخصّص لعلاج تساقط الشعر، وغَسْل الشّعر جيداً؛ لإزالة الرّواسب عنه. </li>

<li> الحَد من استخدام أدوات تصفيف الشّعر الحراريّة، وعِنْد الاضطرار لاستخدامها يجب تَطبيق مُنْتجات الحماية من الحرارة.</li>
<li>تَناول الغذاء الصّحي، مِثْل الخضروات الورقيّة، والجزر، والبطاطا الحلوة، والجَوْز، واللّوز، والبقوليات، والقَرنبيط، والبرتقال، والجوافة، وبذور الكتّان.</li>
<li> التّعامل بلطفٍ مع الشّعر.</li>
<li>عدم تمشيط الشّعر عندما يكون مُبلّلاً.</li>
</ul>  </div> <div class="type">
<h3> قشرة الشعر</h3>
<a href="https://imgbb.com/"><img src="https://i.ibb.co/dpjmN55/image.jpg" alt = "قشرة الشعر" width = "400" height="200"></a>

<h4> قشرة الشعر من مشاكل الشعر التي تصادف الكثيرين ويعانون منها، ولها أسباب قد تكون محددة وأهمها:</h4>
<ul>
<li> سوء التغذية.</li>
<li> التهاب الجلد الدهني.</li>
<li>العدوى.</li>
 </ul>


<h5> هذه المشكلة تسبب قلق وتوتر الكثير من الأشخاص خاصة عند تساقط القشرة على الأكتاف.</h5>

<h3> علاج القشرة </h3>

<h5>يكون علاج مشاكل الشعر التي مثل هذه بسيط عن طريق استخدام الشامبو المضاد للقشرة وبعض الملطفات. </h5>
<h5>ويمكن أن تستخدم بعض المواد الطبيعية لعلاج قشرة الرأس مثل الخل أو الليمون في الخلطات الطبيعية. </h5> 
</div> <div class="type">
<h3> ظهور الشيب المبكر</h3>
<a href="https://imgbb.com/"><img src="https://i.ibb.co/ZhrnLzF/image.jpg" alt = "الشيب المبكر" width = "400" height="200"></a>

<h4> لا شكّ أن ظهور الشعر الأبيض يرتبط في ذهن العديد بالتقدم في العمر، ولكن قد تجد الشعر الأبيض يظهر في سنوا
ت مبكرة وقد يسبب مشاكل نفسية لدى الشخص، فمن المعروف أن صبغة الميلانين هي المسؤولة عن لون الشعر وقصورها يسبب
 ظهور الشعر الأبيض، ومن أهم أسباب ظهور الشعر الأبيض في سن مبكر هو: الجينات الوراثية، والتوتر والقلق الشديد، 
 نقص بعض العناصر الغذائية الهامة، التغذية السيئة، العلاج الكيميائي. كل هذا يؤدي إلى حدوث المزيد من مشاكل الشعر.</h4>
<h3>علاج الشيب المبكر </h3>
<h4> أهم ما يسبب الشيب المبكر هو الجينات الوراثية لذا فمن الصعب التحكم فيها، فيلجأ الغالبية إلى الصبغات الكيميائية لتل
وين الشعر ولكنه حل مؤقت، وعند البحث عن حل دائم أو مفيد للتخلص من مشاكل الشعر والشيب المبكر أو تقليله أو تأخير ظهور
ه فيمكن اتباع بعض النصائح الهامة وهي:</h4>
<ul>
<li> التغذية السليمة وخاصة تناول الأطعمة الغنية بفيتامين B12.</li>
<li> استخدام مستحضرات كيميائية غنية بالبيوتين مثل الشامبو والكريم.</li>
<li> الحفاظ على رطوبة الشعر بشكل مناسب.</li>
<li>تجنب التوتر والقلق أو عمل بعض التمرينات الخفيفة للتخلص من ذلك. </li>
<li>البعد عن الصبغات الكيميائية ويمكن استخدام الحناء الطبيعية بدلًا عنها. </li>

</ul> 
</div> <div class="type">
<h3> جفاف الشعر </h3>
<a href="https://ibb.co/RpqWfbd"><img src="https://i.ibb.co/5WPVm4w/image.jpg" alt = "جفاف الشعر" width = "400" height="200"></a>


<h4> جفاف الشعر يعتبر من مشاكل الشعر التي تصادف العديد ليس فقط أصحاب الشعر الجاف، ولكن قد يصيب الشعر الدهني أو العادي الجفاف، 
وهو أمر مزعج أن يصبح الشعر جاف وقد لا يصلح معه أي روتين يومي لاستعادة طبيعته الأولى. </h4>
<h4>  ولكن حل هذه المشكلة تكون في الغالب في استخدام الخلطات الطبيعية الممزوجة بالمغذيات الطبيعية والمرطبات مثل الزيوت الطبيعية كزيت الز
يتون، زيت جوز الهند، استخدام العسل والبيض وغيرها من الأقنعة المفيدة لحل مشاكل الشعر وتفيد في ترطيبه، خاصة إذا استخدمت لفترة طويلة من الوقت.</h4>
</div> <div class="type">
<h3> تقصف الشعر </h3>

<a href="https://imgbb.com/"><img src="https://i.ibb.co/pjm7YZh/image.jpg" alt = "تقصف الشعر" width = "400" height="200"></a>

<h4> من مشاكل الشعر التي يعاني منها العديد من الأشخاص هو تقصف أطراف الشعر، وبالتالي تلفه وتشوه مظهره. </h4>
<h3>من أهم الأسباب التي تؤدي إلى تقصف الشعر ما يلي:  </h3>
<ul> 
<li>التلوث الموجود في الهواء المحيط بالشعر. </li>
<li> استخدام مصففات الشعر الحرارية بشكل قوي.</li>
<li> عدم غسل الشعر لفترة طويلة.</li>
<li> استخدام مستحضرات ضارّة بالشعر.</li>

</ul>
<h3>  علاج التقصف</h3>
<ul>
<li>  تهذيب الشعر وقصه بمقدار مناسب.</li>
<li>استخدام المغذيات الطبيعية بشكل مستمر. </li>
<li> التوجه إلى الطبيب للبحث عن العلاجات المناسبة.</li>
<li> تجنب استخدام المصففات الحرارية والصبغات الكيميائية.</li>
</ul>

<h4> في النهاية يمكن القول بأن هناك العديد من مشاكل الشعر التي تشوه مظهره وتجعل الشخص منزعج، مثل الشعر التالف والشعر الباهت 
والمجعد وغيرها، كما يمكن القول بأن التغذية الصحية والبعد عن مصففات الشعر الحرارية والصبغات الكيميائية وتناول المكملات الغذائية من أهم طرق علاج الشعر بشكل عام. </h4>

<button class = "button" type="button" onclick="pageRedirect()">اضغط هنا للمزيد من المعلومات</button>  

</div> <div class="type">

<h5> المراجع</h5>
<a href="https://mawdoo3.com/%D9%85%D8%B4%D8%A7%D9%83%D9%84_%D8%A7%D9%84%D8%B4%D8%B9%D8%B1_%D8%A7%D9%84%D9%85%D8%AE%D8%AA%D9%84%D9%81%D8%A9"> 
مشاكل الشعر المختلفة - موضوع</a>

<a href="https://www.veraclinic.net/ar/%D8%A3%D9%87%D9%85-%D9%85%D8%B4%D8%A7%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%B9%D8%B1/"> 
مشاكل الشعر | علاج مشاكل الشعر | تجميلي</a> 
    </div> 
    </div> 
</body>





</html>
