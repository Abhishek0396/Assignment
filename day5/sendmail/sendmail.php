<html>
<h1>FEEDBACK FORM</h1>
<form action='sendmail.php' method='POST'>
    NAME:<input type='text'name='name'><br>
  EMAIL:<input type='text'name='email'><br>
MESSAGE:<textarea name='feedback'></textarea><p>
<input type='submit' name='submit'value='submit'>
</form>
</html>
<?php
$name=$_POST['name'];
$feedback=$_POST['feedback'];
$email=$_POST['email'];
$admin="avpawar03@gmail.com";
$multiple=array("$email,$admin");
foreach($multiple as $to)
{
if($_POST['submit'])
{
if(strlen($name)<=20&&strlen($feedback)<=300)
{
ini_set("SMTP","spawar.ap@gmail.com");
//echo ini_get("SMTP");
$subject="THANK YOU FOR FEEDBACK";
$body="This is mail from r3ones\nThanking you for ur feedback\n\n$feedback\n$name\n$email";
$headers="From:r3ones@gmail.com";
mail($to,$subject,$body,$headers);
echo"You must enter the credentials";
die();
}
else
die("MAX length of name or feedback exceeds the limit");
}
else
echo"You must enter the credentials";
}
?>
