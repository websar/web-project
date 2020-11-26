<? php 
$conn = mysqli_connect('localhost', 'root', ' ' , HairDB'); 
if (!$conn) { 
die("Connection failed: ".mysqli_connect_error() ); 
}