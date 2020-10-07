<html>
<form action=strfunt.php method='POST'>
<input type='text' name='string'>
<input type='submit' value='Enter'>
</form?
<html>
<?php
$string=$_POST['string'];
if($string)
{
echo strlen($string);
echo"<br />";
print_r(explode('/',$string,3));
echo"<br />";
echo strrev($string);
echo"<br />";
echo strtolower($string);
echo"<br />";
echo strtoupper($string);
echo"<br />";
}
else
echo"please enter something";
echo"<br />";
if($string)
{
$replace=substr_replace($string,"blah",1);
echo $replace;
}
else
	echo"enter something";
?>
