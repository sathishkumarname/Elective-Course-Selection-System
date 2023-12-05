<?php include 'header.php';?>
<?php
include("connection.php");
$dept=$_SESSION['Major'];
$c=$_SESSION['choose_dept'];
$roll_no=$_SESSION['Roll_No'];
$name=$_SESSION['Name'];
if(isset($_POST['confirm']))
{
	$qry="select Subject_Name,Sub_code from course_list where Dept_Name='$c' ";
	$res=mysqli_query($connect,$qry);
	
	while ($rows=mysqli_fetch_array($res))
	{
		$c_id=$rows['Sub_code'];
		$c_name=$rows['Subject_Name'];
	}
	$qry1="select $c from course_allocation where Department='$dept'";
	$res1=mysqli_query($connect,$qry1);
	while($rows1=mysqli_fetch_array($res1))
	{
		if($rows1[0]!=0)
		{
			$seats=$rows1[0];
			$qry3="update course_allocation set $c=$seats-1 where Department='$dept'";
			$res3=mysqli_query($connect,$qry3);
			$qry4="insert into nme_choosing_list values('$roll_no','$name','$dept','$c','$c_name','$c_id')";
			$res4=mysqli_query($connect,$qry4);
			$qry5="update student_list set Status='Y' where Roll_No='$roll_no'";
			$res5=mysqli_query($connect,$qry5);
			$qry6="select Filled_Seats,Remaining_Seats from course_list where Dept_Name='$c' ";
			$res6=mysqli_query($connect,$qry6);
			while($rows3=mysqli_fetch_array($res6))
			{
				$fill=$rows3[0];
				$rem=$rows3[1];
			}
			$qry7="update course_list set Filled_Seats = $fill+1 where Dept_Name='$c'";
			$res7=mysqli_query($connect,$qry7);
			$qry8="update course_list set Remaining_Seats = $rem-1 where Dept_Name='$c'";
			$res8=mysqli_query($connect,$qry8);
			header("location:confirmation.php");
		}
		else
		{
			echo "<script> alert('Seats are Full');</script>";
			header("location:course_display.php");
		}
	}
}
if(isset($_POST['back']))
{
	header("location:course_display.php");
}
?>
<div class="container">
	<div class="card" style="width:70%; margin: 50px auto;">
		<div class="card-body">
<?php
echo "<form name='course_confirm' method='post'>";
echo "<h1>";
echo "<table border='0' cellpadding='10' cellspacing='10' align='center'>";
echo "<tr>";
echo "<th align='left'> Name :</th>";
echo "<th align='left'>";
echo $_SESSION['Name'];
echo "</th>";
echo "</tr>";
echo "<tr>";
echo "<th align='left'> Roll No :</th>";
echo "<th align='left'>";
echo $_SESSION['Roll_No'];
echo "</th>";
echo "</tr>";
echo "<tr>";
echo "<th align='left'> NME Choosing Department :</th>";
echo "<th align='left'>";
echo $_SESSION['choose_dept'];
echo "</th>";
echo "</tr>";
echo "<tr>";
echo "<th align='left'> Course Id and Course Name :</th>";
		$qry2="select * from course_list where Dept_Name='$c'";
		$res2=mysqli_query($connect,$qry2);
		while($rows2=mysqli_fetch_array($res2))
		{
			echo "<th align='left'>";
			echo $rows2['Sub_code']." - ".$rows2['Subject_Name'];
			echo "</th>";
			$_SESSION['Sub_code']=$rows2['Sub_code'];
			$_SESSION['Subject_Name']=$rows2['Subject_Name'];
		}
echo "</tr>";
echo "<tr>";
echo "<th align='center' colspan='2'> <input type='submit' name='confirm' value='OK' class='btn btn-success'> </th>";
echo "</tr>";
echo "</table>";
echo "<p align='left'> <input type='submit' name='back' value='Back' class='btn btn-warning pull-right' style='float:right;'> </p>";
?>
</div>
</div>
</div>
