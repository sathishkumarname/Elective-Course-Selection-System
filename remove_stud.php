<?php
      if(isset($_POST['submit']))
	  {
		  include("connection.php");
		  $connect = mysqli_connect('localhost','root','','nme')or die("Could not connect: ".mysqli_error($connect));
		  $roll_no=$_POST['user_name'];
		  
		  $sqlInsert1 = "SELECT * from student_list where Roll_No=('" . $roll_no . "')";
          $Res=mysqli_query($connect,$sqlInsert1);
		  if (!empty($Res)) 
			{
			$sqlInsert = "DELETE from student_list where Roll_No=('" . $roll_no . "')";
		  
		  
            $result = mysqli_query($connect,$sqlInsert);
			 
			
                echo "<script> alert('Student Record Deleted Successfully'); </script>";
            }
			else {
                echo "<script> alert('Student record not found'); </script>";
            }
	}		  
?>


<html lang="en">
<head>

  <title>Elective Selection System - ABC College</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body bgcolor="blue">

</body>


<body>
<div class="container main-content">
		<div class="card" style="width:500px;">
		
			<div class="card-body" >
			<body background="logo1.jpg">
			<form name="remove_student" method="POST">
			<center><h3>REMOVE STUDENT</h3></center>
			<table border="0" cellpadding="10" cellspacing="20">
			<tr>
				<th>Roll Number:</th>
				<td colspan="3"><input type="text" name="user_name" Placeholder="Enter Student Roll.No" maxlength="8" required></td>
			</tr>
			
			
			<tr>
				<th></th>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		    </table>

</form>
			
