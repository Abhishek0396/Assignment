<?php
$file=file_get_contents("sql.php");
$visitors=$file;
$visitorsnew=(int)$visitors+1;
$filenew=fopen("sql.php","w");
fwrite($filenew,$visitorsnew);
echo "You have $file visitors";
?>

