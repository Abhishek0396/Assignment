<html>
<form action='register.php' method='POST'>
<h1>REGISTRATION FORM</h1>
<table>
    <tr>
	    <td>
		YOUR FULL NAME:
		</td>
		<td>
		<input type='text' name='fullname'>
		</td>
	</tr>
    <tr>
        <td>
        CHOOSE A USERNAME:
        </td>
        <td>
        <input type='text' name='username'>
		</td>
	</tr>
    <tr>
        <td>
        CHOOSE A PASSWORD:
        </td>
        <td>
        <input type='text' name='password'>
        </td>
   	</tr>
	<tr>
        <td>
        REPEAT A PASSWORD:
        </td>
        <td>
        <input type='text' name='repeatpassword'>
        </td>
   	</tr>	
	<tr>
        <td>
        ENTER YOUR ID NO:
        </td>
        <td>
        <input type='text' name='clid'>
        </td>
   	</tr>	
</table>
<input type='submit' name='submit' value='Register'>
</form>		
</html>
<?php
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$password=$_POST['password'];
$repeatpassword=$_POST['repeatpassword'];
$clid=$_POST['clid'];
if($_POST['submit'])
{
if($username&&$fullname&&$password&&$repeatpassword&&$clid)
{
$password=md5($password);
$repeatpassword=md5($repeatpassword);
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"login");
$namecheck=mysqli_query($connect,"select username from studentlogin where username='$username'");
$count=mysqli_num_rows($namecheck);
if($count!=0)
{
if($password==$repeatpassword)
{
if(strlen($username)>=25||strlen($fullname)>=25)
{
echo"MAX LIMIT FOR USERNAME/FULLNAME ARE 25 CHARACTERS";
}
ELSE
IF(strlen($password)>=25||strlen($password)<6)
{
echo"PASSWORD MUST BE BETWEEN 6 AND 25 CHARACTERS";
}
ELSE
echo"YOUR PASSWORD LENGTH IS TOO SHORT OR TOO LONG";
}
else
echo"YOUR PASSWORD AND REPEAT PASSWORD DO NOT MATCH";
}
else echo"username already taken";
}
else
echo"PLEASE FILL IN <b>ALL</b> FIELDS";
}
$queryreg=mysqli_query($connect,"insert into studentlogin values('','$fullname','$username','$password','$repeatpassword','$clid')");
echo("<br><a href='login.php'>Click</a> here to login page");
?>