<?php include 'header.php';?>
<?php
include("connection.php");
$id=$_SESSION['Roll_No'];
$name=$_SESSION['Name'];

$i=0;
$count=1;
if(isset($_POST['0']))
{
		$_SESSION['choose_dept']=$_POST['0'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['1']))
{
		$_SESSION['choose_dept']=$_POST['1'];
		header("location:choose_course_display.php");
			
}
else if(isset($_POST['2']))
{
		$_SESSION['choose_dept']=$_POST['2'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['3']))
{
		$_SESSION['choose_dept']=$_POST['3'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['4']))
{
		$_SESSION['choose_dept']=$_POST['4'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['5']))
{
		$_SESSION['choose_dept']=$_POST['5'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['6']))
{
		$_SESSION['choose_dept']=$_POST['6'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['7']))
{
		$_SESSION['choose_dept']=$_POST['7'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['8']))
{
		$_SESSION['choose_dept']=$_POST['8'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['9']))
{
		$_SESSION['choose_dept']=$_POST['9'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['10']))
{
		$_SESSION['choose_dept']=$_POST['10'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['11']))
{
		$_SESSION['choose_dept']=$_POST['11'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['12']))
{
		$_SESSION['choose_dept']=$_POST['12'];
		header("location:choose_course_display.php");
}
else if(isset($_POST['13']))
{
		$_SESSION['choose_dept']=$_POST['13'];
		header("location:choose_course_display.php");
}
$a=array("English","BCom_R","CS","Chemistry","Maths","Bio_Tech","Physics","Botany","BBA","BCA","BCom_CA","IT","Tamil","HMCS");
$dept=$_SESSION['Major'];
?>
<div class="container" style="padding: 50px 0;">
	<div class="alert alert-success">
<?php
echo "<table border='0' cellpadding='10' cellspacing='10'>";
echo "<tr>";
echo "<th>";
echo "Name : ";
echo "</th>";
echo "<td>";
echo $name;
echo "</td>";
echo "<th>";
echo "Reg.No : ";
echo "</th>";
echo "<td>";
echo $id;
echo "</td>";
echo "</tr>";
echo "</table>";
?>
</div>
<div class="row">
<?php
foreach($a as $b)
{	
	$qry="select $b from course_select_department where Department='$dept'";
	$res=mysqli_query($connect,$qry);
	?>
	<?php
	while($rows=mysqli_fetch_array($res))
	{	 
		if($rows[0]!="No")
		{
			$c=$rows[0];
			$qry1="select $c from course_allocation where Department='$dept'";
			$res1=mysqli_query($connect,$qry1);
			while($rows1=mysqli_fetch_array($res1))
			{
				if($rows1[0]!=0)
				{
				?>
				<div class="col-sm-4">
				<?php
					$qry2="select * from course_list where Dept_Name='$c'";
					$res2=mysqli_query($connect,$qry2);
					while($rows2=mysqli_fetch_array($res2))
					{	
						?>
						<div class="jumbotron">
						<?php
					    echo "<form name='a' method='post'>";
						echo "<h3>".$rows2['Dept_Name']."</h3>";
						$dept1=$rows2['Dept_Name'];
						echo $rows2['Subject_Name'],"<p>Subject Code: ",$rows2['Sub_code']."</p>";
						echo "Choose NME As : <input type='submit' name='$i' value='$dept1' class='btn btn-secondary'>";
						$i++;
						$count=$count+1;
						echo "</form>";	
						?>
					</div>
						<?php
					  }
					  ?><p></p>
					</div>
					  <?php
					 }
					?>
				<?php
				}
			}	
		}
	}			
?>
</div>
</div>
