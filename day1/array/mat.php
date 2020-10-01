<?php
$num1=array('0'=>array('0'=>1,'1'=>2),'1'=>array('0'=>3,'1'=>4));
$num2=array('0'=>array('0'=>5,'1'=>6),'1'=>array('0'=>7,'1'=>8));
$result=array();
for($x=0;$x<=1;$x++)
{  
    for($y=0;$y<=1;$y++)
	{
		$result[$x][$y]=$num1[$x][$y]+$num2[$x][$y];
	}
	echo"<pre>";
	echo "matrix"." ";
	print_r($result);
	//echo $result;
}
?>
