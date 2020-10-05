<html>
<form action="var.php"method="GET">
<input type='int' name ='a'><br>
<input type='int' name ='b'><br>
<input type='int' name ='c'><br>
<input type='submit' value ='click here'>
</form>
</html>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
If($a&&$b&&$c)
{ if($a==$b&&$a==$c&&$b==$c)
	{
		echo"It is an equilateral triangle";
	}
	else
	{
		if($a==$b&&$b!=$c||$a!=$b&&$b==$c||$a!=$b&&$a==$c)
		{
			echo"it is an isoceles triangle";
		}
		else
		{
			if($a!=$b&&$b!=$c&&$a!=$c)
			{
				echo"it is an scalene triangle";
			}
			else
			{
				echo"it is an right angled triangle";
			}
		}	
	}		
}
else
	echo"please enter values!";
?>


