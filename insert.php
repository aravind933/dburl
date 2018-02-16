<?php
$heading=$_POST['heading'];
$string=$_POST['content'];



$string = activateUrlStrings($string);



function activateUrlStrings($str){
    $find = array('`((?:https?|ftp)://\S+[[:alnum:]]/?)`si', '`((?<!//)(www\.\S+[[:alnum:]]/?))`si');
    $replace = array('<a href="$1" target="_blank">$1</a>', '<a href="http://$1" target="_blank">$1</a>');
    return preg_replace($find,$replace,$str);
}










$conn=mysqli_connect('localhost','root','','interv');

$sql="INSERT INTO para(heading,content) VALUES ('$heading','$string')";
if(mysqli_query($conn,$sql))
{
	echo "data added successfully";
	
}
else
{
 echo "data not added"	;
}
?>