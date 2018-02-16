<?php
$conn=mysqli_connect('localhost','root','','interv');
$sql="SELECT * FROM para";

$result=mysqli_query($conn,$sql);




?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://localhost/angular/angular.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.jumbotron
	{
		margin-bottom:0px;
		border-bottom:1px solid black;
	}
	.header
	{
		height:150px;
		background-color:black; 
	}
	.footer
	{
		height:150px;
		background-color:black; 
	}
</style>
</head>
<body align="center">
	
<header class="header"></header>

<?php 

$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) 
{

 echo " <div class=\"jumbotron\"> ";
	echo "<h2>".$row["heading"]."</h2>"."<br>";
	echo "<p>".$row["content"]."</p>";
echo "</div>";	


}


 ?>

<footer class="footer"></footer>
	

</body>

</html>