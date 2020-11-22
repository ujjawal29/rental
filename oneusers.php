<!doctype html>
<?php

include("dbcon.php");

?>
	<script>

function printp2(e1){
	
 
var r=window.document.getElementById(e1).innerHTML;
		document.body.innerHTML=r;
		window.print();
	alert("p");
	}
</script>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/jquery.min.js"></script>
		<script src="jspdf.js"></script>
			<script src="pdfFromHTML.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style>
	
	ul li{
		float: left;
	}
	ul li:hover{
	
		background-color: green;
	border-bottom-left-radius:40px;
	border-bottom-right-radius:40px;
	
</style>
<body>
<div class="container-fluid">
<style>
	
	ul li{
		float: left;
	}
	
</style>

<div class="row" id="HTMLtoPDF">
<div class="container-fluid">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2 style="text-align: center;">All Users Info</h2><br>
	<div class="table-responsive">
<table class="table table-bordered " style="">
<tr>
	<th>Sr</th>
<th>Name</th>
<th>Email</th>
</tr>
	<?php
	$i=0;
	$select="select* from users";
	$query=mysqli_query($con,$select);
	while($r=mysqli_fetch_array($query))
	{
	
	$i++;
	?>
	
<tr>
<td><?php echo $i; ?></td>
<td> <p><?php echo $r['username']; ?></p></td>
<td><?php echo $r['email']; ?></td>
</tr>
	<?php
		
		
	}
	
	?>
</table>
	</div>	
</div>
<div class="col-md-3"></div>
</div>	
</div>
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>


	<br>
</div>

</div>	

</body>
</html>