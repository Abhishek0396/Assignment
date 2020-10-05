<html>
<form action="sql.php"method="POST">
Name:    <input type='text' name ='Name'><br>
subject 1:<input type='integer' name ='subject1'><br>
subject 2:<input type='integer' name ='subject2'><br>
subject 3:<input type='integer' name ='subject3'><br>
subject 4:<input type='integer' name ='subject4'><br>
subject 5:<input type='integer' name ='subject5'><BR>
<input type='submit' value ='SUBMIT'>
</form>
</html>

<?php
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"result");
echo"connected!";
$name=strtoupper($_POST['Name']);
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];
$subject5=$_POST['subject5'];
$total1=500;
if($name&&$subject1&&$subject2&&$subject3&&$subject4&&$subject5)
{
	echo "NAME:$name<br>";
	echo"subject1:$subject1,subject2:$subject2,subject3:$subject3,subject4:$subject4,subject5:$subject5<br>"; 
	$total=$subject1+$subject2+$subject3+$subject4+$subject5;
	echo"TOTAL MARKS OBTAINED:$total<br>";
	$percentage=($total/500)*100;
	echo "PERCENTAGE:$percentage<br>";
	$write=mysqli_query($connect,"Insert into class1 values('','$name',$subject1,$subject2,$subject3,$subject4,$subject5,$total1,$total,$percentage)");

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


