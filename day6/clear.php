<html>
<form action='clear.php' method='POST'>
<h1>Student's Results Sheet</h1>
<table>
    <tr>
	    <td>
		College Id:
		</td>
		<td>
		<input type='text' name='clid'>
		</td>
	</tr>
    <tr>
        <td>
        Student Fullname:
        </td>
        <td>
        <input type='text' name='fullname'>
		</td>
	</tr>
    <tr>
        <td>
        PHP:
        </td>
        <td>
        <input type='text' name='php'>
        </td>
   	</tr>
	<tr>
        <td>
        MYSQL:
        </td>
        <td>
        <input type='text' name='mysql'>
        </td>
   	</tr>
	<tr>
        <td>
        HTML:
        </td>
        <td>
        <input type='text' name='html'>
        </td>
   	</tr>	
</table>
<input type='submit' name='Submit' value='Submit'>
</form>		
</html>
<?php
session_start();
$clid=$_POST['clid'];
$fullname=$_POST['fullname'];
$php=$_POST['php'];
$mysql=$_POST['mysql'];
$html=$_POST['html'];
if($_POST['Submit'])
{
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"login");
$totalmarks=$php+$mysql+$html;
$percentage=($totalmarks/300)*100;
$query=mysqli_query($connect,"Insert into marks values('','$clid','$fullname','$php','$mysql','$html','$totalmarks','300','$percentage')");
//$query=mysqli_query($connect,"update marks set php=$php where clid='$clid'");
//mysqli_query($connect,"update marks set totalmarks='$totalmarks'where clid='$clid'");
//mysqli_query($connect,"update marks set percent='$percentage'where clid='$clid'");
//$query=mysqli_query($connect,"delete from marks where clid='$clid'");
}
else
die("Please enter credentials to update results");
?>