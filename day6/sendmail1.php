<html>
<h1>RESULTS MAIL FORM</h1>
<form action='sendmail1.php' method='POST'>
COLLEGE ID:<input type='text'name='clid'><br>
	  NAME:<input type='text'name='name'><br>
     EMAIL:<input type='text'name='email'><br>
<input type='submit' name='submit'value='submit'>
</form>
</html>
<?php
$name=$_POST['name'];
$clid=$_POST['clid'];
$feedback=$_POST['feedback'];
$email=$_POST['email'];
$connect=mysqli_connect("localhost","root","")or die("connection failed")or mysqli_error();
mysqli_select_db($connect,"login");
$query=mysqli_query($connect,"select * from marks where name='$name'");
while($row=mysqli_fetch_assoc($query))
{
	$clid1=$row['clid'];
	$name=$row['name'];
	$php=$row['php'];
	$mysql=$row['mysql'];
	$html=$row['html'];
	$totalmarks=$row['totalmarks'];
	$marks=$row['marks'];
	$percentage=$row['percent'];
}
if($_POST['submit'])
{
ini_set("SMTP","spawar.ap@gmail.com");
//echo ini_get("SMTP");
$subject="RESULTS OF UR WARD";
$body="This is mail from AVP institute\n Result of ur ward\n\n$clid1\nNAME:$name\nPHP:$php\nMYSQL:$mysql\nHTML:$html\nTOTALMARKS:$totalmarks\nMARKS:$marks\nPERCENTAGE:$percentage";
$headers="From:AVPInstiute@gmail.com";
mail($email,$subject,$body,$headers);
echo"You must enter the credentials";
die();
}
else
echo"You must enter the credentials";
?>