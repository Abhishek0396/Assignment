<html>
<form action='md5.php' method='POST'>
<input type='text'name='username'><br>
<input type='text'name='password'><br>
<input type='submit' value='SUBMIT'>
</form>
</html>
<?php
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"data1");
$password=$_POST['password'];
$username=$_POST['username'];
$passwordenct=md5($password);
if($_POST['password']&&$_POST['username'])
{
mysqli_query($connect,"insert into users values('','$username','$passwordenct')");
}
ELSE
{
DIE("Please enter data");
}
?>