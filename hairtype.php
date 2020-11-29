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

</br>
<nav>

<ul>
<li> <a href="hhome.php"> الرئيسية </a> </li>
<li> <a href="#">أنواع الشعر </a> </li>
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

<h1 class="type"> انواع الشعر : </h1>
<div class="body">


<div class="type">
        <h1> الشعر الدهني</h1>
        <img src="https://hadeel0rahaf.files.wordpress.com/2013/11/images-3.jpg" >
        <p>
   
الشعر الدهني هو ذلك الشعر الذي تظهر عليه الدهون نتيجة زيادة الإفرازات الدهنية من الغدد الموجودة في فروة الرأس والبشرة.

قد يعتبر البعض أن الإفرازات الدهنية هي شيء ضار، بالطبع لا.

فهي شيء طبيعي وضروري للحفاظ علي الشعر والإبقاء علي لمعانه.

لكن المشكلة تحدث عند زيادة تلك الإفرازات عن حدها الطبيعي، ما يتسبب في تحول الشعر إلي شعر دهني.
  </p>
    </div> <div class="type">

  <h3>اسباب الشعر الدهني </h3>
 

<ol>

<li>الوراثة</li>
<li>المناخ </li>
<li>الافراط في غسل الشعر </li>
<li>استخدام مجففات الشعر </li>
<li>لمس الشعر بشكل متكرر</li>
<li>نظام غذائي غير صحي</li>
<li>منتجات غير مناسبة : يفضل اسخدام شامبو يكون الرقم الهيدروجيني له محايد</li>



</ol>



</div> <div class="type">



<h3>خصائص الشعر الدهني </h3>
<ul>
    <li>يكون مغطي بطبقة من الزيت أو الدهن</li>
    <li>شعر خفيف وضعيف وناعم جدا</li>
    <li>لامع بشكل ملفت</li>
</ul>

    <h3>علاجات وحلول للشعر الدهني</h3>
    <ul>
        <li>استخدام شامبو للشعر الدهني والحرص على تنظيف الشعر جيدا </li>
        <li>عدم استخدام البلسم لانه يمنح طبقة دهنية اخرى  او ضعوا كمية قليلة جدا في الاطراف </li>
        <li> خل التفاح قد يساهم في تقليل الدهون او التخلص منها برشة على الشعر </li>
        <li>الحناء و السدر يساعدون على تقليل الدهون</li>


    </ul>
    </div> 
    <div class="type">
        <h1 > الشعر الجاف </h1>
        <img src="data:image/jpeg;base64,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" alt="image">
        <p>
   
            يمكن تعريفه بأنه هو ذلك الشعر الذي يتعرض فوراً للجفاف بعد غسله ويفقد لمعانه بسرعة جدا.

            كما ذكرنا في النوع السابق،الشعر الدهني؛ أن زيادة إفرازات الغدد الدهنية هي سبب تكون الشعر الدهني.
            
            بالمثل ،عندما تقل إفرازات الغدد الدهنية بشكل كبير يؤدي ذلك إلي جفاف الشعر وفقدانه لحيويته ولمعانه


        </p> </div> <div class="type">
        <h3>اسباب الشعر الجاف </h3>
        <ul>
            
            <li>الافراط في استخدام ادوات تصفيف الشعر </li>
            <li>الافراط في استخدام الصبغة </li>
            <li>الافراط في غسيل الشعر </li>
            <li>العوامل البيئية </li>


        </ul>
        </div> <div class="type">
        <h3>خصائص الشعر الجاف </h3>
        <ol>

            <li>النهايات المتقصفة </li>
            <li>صعوبة التسريح </li>
            <li>المظهر المجعد </li>
            <li>تشابك الشعر </li>
            <li>خشونة الملمس </li>
            <li>غياب الحيوية فيه </li>
        </ol>
        </div> <div class="type">
        <h3>علاجات و حلول الشعر الجاف </h3>

        <ul> 
            <li>اسخدام الزيوت بشكل دوري </li>
            <li> المايونيز يحتوي على نسبة عالية من البروتين الضروري للعلاج الشعر الجاف</li>
            <li>التقليل من استخدام مصصفات الشعر و الصبغات قدر الامكان</li>
            <li> استخدام سيروم مناسب </li>
        </ul>

        </div> 

        <div class="type">
        <h1 > الشعر المختلط </h1>
        <img src="https://1.bp.blogspot.com/-sm8sSmAqlko/XpOll8NF-WI/AAAAAAAAAcU/suXYkL5nlrEHmX2kVCP3tq6RZmvZs2dvwCLcBGAsYHQ/s1600/xx.PNG" alt="image">
        <p> 

            من الاسم يمكننا أن ندرك أن هذا الشعر هو عبارة عن خليط من الأنواع السابقة .

            فهو يجمع بين النوعين الدهني والجاف في نفس الوقت، فنجد أن فروة الرأس (جذور الشعر) نفسها تكون دهنية في الجزء الأعلى منها وجافة في أطراف الشعر.
            
            يعتبر هذا النوع هو أصعب أنواع الشعر من ناحية التعامل، حيث  يتطلب معاملة خاصة وعناية فائقة 

        
        </p> </div> <div class="type">
        <h3>خصائص الشعر المخلتط </h3>  
        <ol>
            <li>ذو جذور دهنية واطراف جافة</li>
            <li>شعر مفرود و اطراف مموجة</li>
            <li>شعر ناعم مقصف </li>
         </ol> </div> <div class="type">
        <h3>علاجات وحلول الشعر المختلط </h3>
        <ul>
            <li> عند غسل الشعر احرصي ان تركزي على فورة الرأس فقط وعدم الفرك العنيف للباقي الشعر</li>
            <li>اسخدمي زيوت للاطراف الشعر بشكل دوري </li>
            <li> استخدام البلسم على اطراف الشعر فقط </li>
            <li> استخدام سيروم مناسب </li>
            <li> ينصح ب تمشيط الشعر وهو جاف لكي يتم توزيع الدهون التي في الفورة الى باقي الشعر </li>




        </ul>
        
        </div> 
        <div class="type">
        
        <h1> الشعر العادي </h1>
        <img src="https://img.yasmina.com/_h7Dq9yaAeAMlrU6GmjmREW5IK0=/700x792/smart/http://harmony-assets-live.s3.amazonaws.com/image_source/8a/db/8adb52ef593cc2dd9a3d29fcca14882d373c850f.jpg" alt="image" height="200" width ="300">
        <p> 
            هذا النوع يعتبر وسط النوعين السابقين (الدهني والجاف)، فلا يكون لامع بدرجة كبيرة ممتلئ بالدهون.

            في نفس الوقت لا يكون جاف، بل هو وسط بين النوعين حيث يوجد توازن في كمية الزيوت المنتجة عن طريق فروة الرأس.
            
            فلا هي زائدة ولا ناقصة. ويعد هذا النوع هو أفضل أنواع الشعر.
        </p> </div> <div class="type">
        <h3>خصائص الشعر العادي </h3>  

        <ol>
            <li>يحتوي على لمعة معتدلة بعيدا عن الدهون </li>
            <li>سهل في التسريح </li>
            <li>مرن في العديد من التسريحات</li>
            <li>ممكن ان يكون مفرود او مموج(كيرلي)او مجعد</li>
        </ol> </div> <div class="type">
        <h3>نصائح للشعر العادي </h3>
        كما قلنا سابقا فهو من افضل انواع الشعر لذا العناية به سهلة لكن اليكم بعض النصائح 
        <ul> 
            <li> تجنب مصففات الشعر والصبغات لانها تجفف الشعر</li>
            <li> استخدام انواع زيوت خفيفة</li>
            <li> عدم غسل الشعر بشكل يومي لانها قد يسبب الجفاف له</li>
            <li>اسخدام السيروم المناسب </li>



        </ul> 
        </div> 
    </div>
    </body>
</html>
