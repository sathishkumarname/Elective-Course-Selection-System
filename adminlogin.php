<?php include 'header.php';?>
<html>
<?php
	include("connection.php");
	if(isset($_POST['sub']))
	{
		$user=$_POST['user_name'];
		$pass=$_POST['password'];
		$qry="select * from admin_login where Username = '$user' and Password='$pass' ";
		$res=mysqli_query($connect,$qry);
		$val=mysqli_num_rows($res);
		if($val==1)
		{
			header("location:options.php");
		}
		else
		{
			echo "<script> alert('Username Or Password is Incorrect') </script>";
		}
	}
?>
<body>
<body background="logo1.jpg">
<div class="container main-content">
		<div class="card" style="width:500px;">
		
			<div class="card-body">
		
		<form name="admin_login" method="POST">

		<center><h3>ADMIN LOGIN</h3></center>
		<table border="0" cellpadding="10" cellspacing="20">
			<tr>
				
				<th>Username : </th>
				<td colspan="3"><input type="text" name="user_name" Placeholder="Admin id" maxlength="20" required class="form-control"></td>
			</tr>
			<tr>
				<th>Password : </th>
				<td colspan="3"><input type="Password" name="password" Placeholder="Password" maxlength="20" required class="form-control"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="sub" value="Login" class="btn btn-success"></td>
			</tr>
		</table>
		<div id="footer">
	<p><a href="index.php"><center>Go to Student Panel</center></a></p>
</div>
</body>
</html>