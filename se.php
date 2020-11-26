<html lang="ar" dir="rtl">
<head>
 <meta charset="utf-8">
 <title></title>
 <style>
 body{
    background-color: #f3f3f3;
    font-family: arial;
 }
  .search-container{
    width: 900px;
    background-color: #fff;
 }
 .search-box{
    padding-bottom: 30px;
    width: 100%;
 }
 input{
    padding: 0px 20px;
    width: 300px;
    height: 40px;
    font-size: 22px;
 }
 button{
    width: 100px;
  height: 44px;
    font-size: 22px;
  }
 </style>
</head>
<body>
</form>
<h1> صفحةالموضوع </h1>
<div class="search-container">
 <?php
    $conn=mysqli_connect("localhost","root","","searchdb");
 $tital=mysqli_real_escape_string($conn,$_GET['title']);
 
       $sql = "SELECT * FROM search WHERE title = '$tital'";
       $result = mysqli_query($conn,$sql);
       $queryResults = mysqli_num_rows($result);
      if ( $queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          echo " <div class='search-box'>
           <h3>".$row['title']."</h3>
            <p>".$row['atext']."</p>
          </div> ";
        }
      }
   ?>
</div>
 </body>
</html>