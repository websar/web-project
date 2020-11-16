<?php

// فتح الجلسه لاستدعاء قيمتها
session_start();

// داله للتحقق من وجود قيمه فى جلسة username
if(!isset($_SESSION['email'])){
	// اذا كانت القيمه فارغه يتم الانتقال الى صفحة تسجيل الدخول
	header("Location: log.php");
	exit();
}


?>