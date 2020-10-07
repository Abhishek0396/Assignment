<html>
<form action ='upload.php' method='POST'enctype='multipart/form-data'>
<input type='file' name='test'><pr>
<input type='submit' value='UPLOAD'>
</form>
</html>
<h1>Upload a file....</h1>
<?php
$name=$_FILES["test"]['name'];
echo "NAME:$name";
echo"<br />";
$type=$_FILES["test"]["type"];
echo "TYPE:$type";
echo"<br />";
$size=$_FILES["test"]["size"];
echo "SIZE:$size";
?>
