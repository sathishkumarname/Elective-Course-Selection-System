<html>
<?php
if(isset($_POST['sub']))
{
	header("location:filedownload.php");
}
?>
<body target="two">
<body background="logo1.jpg">
	<form name="download" method="post">
	<center>
		<h2> Click below the button For download a NME Choosing Student Details</h2>
		<input type="submit" name="sub" value="VIEW">
	</center>
	</form>
</body>
</html>