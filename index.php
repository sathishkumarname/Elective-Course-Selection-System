<?php
include 'header.php';
	$flag=0;
      if(isset($_POST['submit']))
	  {
		  include("connection.php");
		  $roll_no=$_POST['user_name'];
		  $DD=$_POST['Date'];
		  $MM=$_POST['Month'];
		  $YY=$_POST['Year'];
		  $DOB=$YY."-".$MM."-".$DD;	
		  $qry="select * from student_list";
		  $res=mysqli_query($connect,$qry);
		  while($res1=mysqli_fetch_array($res))
		  {
			if($res1['Roll_No'] == $roll_no && $res1['DOB']== $DOB )
			{
					if($res1['Status']!='Y')
					{
						$_SESSION['Major']=$res1['Major'];
						$_SESSION['Roll_No']=$res1['Roll_No'];
						$_SESSION['Name']=$res1['Name'];
						$flag=1;
						break;
					}
					else
					{
						echo "<script> alert('You already choose your NME Course');</script>";
						$flag=-1;
					}
			}
		  }
		  if($flag==1)
		  {
			  header("location:course_display.php");
		  }
		  
		  else if($flag!=1 && $flag!=-1)
		  {
			  echo "<script> alert('Username Or Password is Incorrect');</script>";
		  }
	  }
	  
?>

<body>
	<div class="container main-content">
		<div class="card" style="width:500px;">
		
			<div class="card-body" >
			<body background="logo1.jpg">
		<form name="login" method="POST">
		<center><h3>COURSE SELECTION</h3></center>
		<table border="0" cellpadding="10" cellspacing="20">
			<tr>
				<th>Roll Number:</th>
				<td colspan="3"><input type="text" name="user_name" Placeholder="Your Roll.No" maxlength="8" required class="form-control"></td>
			</tr>
				<th>DOB : </th>
				<td><select name="Date" class="form-control">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
					</select> </td>
					<td>
					<select name="Month" class="form-control">		
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					</select></td>
					<td>
					<select name="Year" class="form-control">
					<option>1999</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
					<option>2010</option>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>	
					<option>2020</option>
					</select>
					
				</td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="submit" value="Submit" class="btn btn-success"></td>
			</tr>
		</table>
		<div id="footer">
	<p><a href="adminlogin.php"><center>Go to Admin Panel</center></a></p>
</div>
		</form>
	</div>
</div>
</div>

	 