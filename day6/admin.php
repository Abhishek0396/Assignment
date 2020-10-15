<html>
<form action='admin.php' method='POST'>
<h1>Welcome to Admin Portal</h1>
<table>
<table>
    <tr>
	    <td>
		Username:
		</td>
		<td>
		<input type='text' name='username'>
		</td>
	</tr>
    <tr>
	    <td>
		Password:
		</td>
		<td>
		<input type='text' name='password'>
		</td>
	</tr>
	<table>
    <tr>
	    <td>
		College Id:
		</td>
		<td>
		<input type='text' name='clid'>
		</td>
	</tr>
</table>
<input type='submit' value='login'>
</form>
<a href='adminregister.php'>Admin Register</a><br><a href='chgpass1.php'>Foreget password?</a>
</html>
</html>
<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$clid=$_POST['clid'];
$password1=md5($password);
if($username&&$password&&$clid)
{
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"login");
}
else
die("Please enter username and password");
$query=mysqli_query($connect,"select*from adminlogin where username='$username'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
while($numrows=mysqli_fetch_assoc($query))
{
$dbusername=$numrows['username'];
$dbpassword=$numrows['password'];
$dbclid=$numrows['clid'];
}
if($username==$dbusername&&$password1==$dbpassword&&$clid==$dbclid)
{
echo "Click<a href='clear.php'>here</a> to create/update/delete any entries";
$_session['clid']==$clid;
}
else
echo "Incorrect paswword!";
}
else
echo"User dosen't exist";
?>