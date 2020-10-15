<html>
<h1>Please enter your id <h1>
<form action='marksheet.php' method='POST'>
<input type='text'name='clid'>
<input type='submit'name='submit'value='See result'>
</form>
</html>
<?php
$clid=$_POST['clid'];
$connect=mysqli_connect("localhost","root","")or die("connection failed")or mysqli_error();
mysqli_select_db($connect,"login");
if($_POST['submit'])
{
$query=mysqli_query($connect,"select * from marks where clid='$clid'");
//echo mysqli_num_rows($query);
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
	echo"<table>
	<tr>
	     <td>
		 $clid
		 </td>
	</tr>
	<tr>
	     <td>
		 NAME:$name
		 </td>
	</tr>
	<tr>
	    <td>
		PHP:$php
		</td>
	</tr>
	<tr>
	    <td>
		MYSQL:$mysql
		</td>
	</tr>
	<tr>
	    <td>
		HTML:$html
		</td>
	</tr>
	<tr>
	    <td>
		TOTALMARKS:$totalmarks
		</td>
	</tr>
	<tr>
	    <td>
		MARKS:$marks
		</td>
	</tr>
	    <td>
		PERCENTAGE:$percentage
		</td>
	</tr>
	</table>";
	if($percentage>=60)
	{
		echo"Congrats you have passed";
	}
	else
		echo"Failed";
}
echo"<a href='logout.php'>Logout</a><br><a href='chgpass.php'>Change password?</a><br><a href=sendmail1.php>'Send result's copy</a>";
}
else
die("You must logged in!<a href='login.php'>Login</a>");
?>
