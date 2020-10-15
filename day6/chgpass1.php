<html>
<form action='chgpass1.php' method='POST'>
<h1>Password Change Form</h1>
<table>
    <tr>
	    <td>
		Old password:
		</td>
		<td>
		<input type='text' name='oldpassword'>
		</td>
	</tr>
    <tr>
        <td>
        Clid:
        </td>
        <td>
        <input type='text' name='clid'>
		</td>
	</tr>
    <tr>
        <td>
        New password:
        </td>
        <td>
        <input type='text' name='newpassword'>
        </td>
   	</tr>
	<tr>
        <td>
        Repeat password:
        </td>
        <td>
        <input type='text' name='repeatpassword'>
        </td>
   	</tr>		
</table>
<input type='submit'name='submit'value='Change password'>
</form>
</html>
<?php
session_start();
$user=$_session['clid'];
if($user)
{
if($_POST['submit'])
{
$oldpassword=md5($_POST['oldpassword']);
$newpassword=md5($_POST['newpassword']);
$repeatpassword=md5($_POST['repeatpassword']);
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"login");
$queryget=mysqli_query($connect,"select password from adminlogin where clid='$user'")or die("Query doesn't exist");
$row=mysqli_fetch_assoc($queryget);
if($newpassword==$repeatpassword)
{
$querychange=mysqli_query($connect,"update adminlogin set password='$newpassword'where clid='$user'");
session_destroy();
die("Your password has been changed <a href='admin.php'>Return</a>to the login page");
echo"Success password changed";
}
else
echo"New password and repeat password do not match";
}
else 
echo"Please fill in all the blanks";
}
else
echo"You must logged in ";
?>