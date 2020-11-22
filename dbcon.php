<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dbcon</title>
</head>

<body>
</body>
</html>
<?php

$con=mysqli_connect("localhost","root","","users");
if(!$con)
{
	?>
<script>alert("Database Connecting errror");</script>
<?php
}




?>