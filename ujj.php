<?php
if(isset($_POST['login']))
{
	include("dbcon.php");
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$select="select * from users";
	$query=mysqli_query($con,$select);
	$flag=0;
	while($r=mysqli_fetch_array($query))
	{
		if($r['email']==$email && $r['pass']==$pass)
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
				?>
<script>
window.document.location.href="users.php";
</script>

<?php
	}
	
	else{
		?>
<script>alert("login not")</script>
<?php
	}
	
}
?>