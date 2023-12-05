<?php include 'header.php';?>
<div class="container main-content">
<?php
	echo "<center><h1>Thank You ".$_SESSION['Name'].", You are choosing NME Course as ".$_SESSION['Subject_Name'].".</h1></center>";
	echo "<p align='left'><a href='index.php' class='btn btn-danger'>Logout</a></p>";
?>
</div>
