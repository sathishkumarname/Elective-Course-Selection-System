<?php
      if(isset($_POST['submit']))
	  {
		  include("connection.php");
		  $connect = mysqli_connect('localhost','root','','nme')or die("Could not connect: ".mysqli_error($connect));
		  $name=$_POST['name'];
		  $roll_no=$_POST['user_name'];
		  $DD=$_POST['Date'];
		  $MM=$_POST['Month'];
		  $YY=$_POST['Year'];
		  $DOB=$YY."-".$MM."-".$DD;
          $Major=$_POST['major_name'];	
	      $Status="N";
          $sqlInsert = "INSERT into student_list (Name,Roll_No,DOB,Major,Status) values ('" . $name . "','" . $roll_no . "','" . $DOB . "','" . $Major . "','" . $Status . "')";
            $result = mysqli_query($connect,$sqlInsert);
			if (! empty($result)) 
			{
                echo "<script> alert('Student added Successfully'); </script>";
            } else {
                echo "<script> alert('Unable to add the student'); </script>";
            }
	}		  
?>
<body>
			<body background="logo1.jpg">
<center>
			<form name="add_student" method="POST">
			<table border="0" cellpadding="10" cellspacing="20">
			<tr><table border="0" cellpadding="10" cellspacing="20">
			<tr>
				<th>Name :</th>
				<td colspan="3"><input type="text" name="name" Placeholder="Your Name" maxlength="20" required></td>
			</tr>
			<tr>
				<th>Roll Number:</th>
				<td colspan="3"><input type="text" name="user_name" Placeholder="Your Roll.No" maxlength="8" required></td>
			</tr>
				<th>DOB : </th>
				<td><select name="Date">
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
					<select name="Month">		
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
					<select name="Year">
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
				<th>Major Department:</th>
				<td colspan="3"><input type="text" name="major_name" Placeholder="Enter a Major Department" maxlength="15" required></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</center>
		</form>
		<p align='center'><a href='options.php'>Back</a></p>
		</body>