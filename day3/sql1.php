<?php
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"result");
echo"connected!";
$update=mysqli_query($connect,"update class1 SET subject5='99' where id='2'");
$updat1=mysqli_query($connect,"update class1 SET totalmarks=subject1+subject2+subject3+subject4+subject5 where id='2'");
$updat1=mysqli_query($connect,"update class1 SET percentage=(totalmarks/total)*100 where id='2'");
?>