<?php
$name=strtoupper($_POST['Name']);
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];
$subject5=$_POST['subject5'];
if($name&&$subject1&&$subject2&&$subject3&&$subject4&&$subject5)
{
	echo "NAME:$name<br>";
	echo"subject1:$subject1,subject2:$subject2,subject3:$subject3,subject4:$subject4,subject5:$subject5<br>";
	$total=$subject1+$subject2+$subject3+$subject4+$subject5;
	echo"TOTAL MARKS OBTAINED:$total<br>";
	$percentage=($total/500)*100;
	echo "PERCENTAGE:$percentage<br>";
	if($percentage>=35)
	{
		echo"Shit you have passed!";
	}
	else
	{
		echo"Congrats you have failed!";
	}
}
else
{
	echo"Please enter credentials!";
}

?>
<html>
<form action="var1.php"method="POST">
<tr><td>Name:<input type='text'name='Name'><td></tr><br>
<tr><td>Subject 1:<td><input type='integer' name ='subject1'><td></tr><br>
<tr><td>Subject 2:<input type='integer' name ='subject2'><td></tr><br>
<tr><td>Subject 3:<input type='integer' name ='subject3'><td></tr><br>
<tr><td>Subject 4:<input type='integer' name ='subject4'><td></tr><br>
<tr><td>Subject 5:<input type='integer' name ='subject5'><td></tr>
<input type='submit' value ='Click Here'>
</form>
</html>