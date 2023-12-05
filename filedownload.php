<html>
<head><title>NME LIST</title>
<style>
table,th,td{
align:fixed;
border:3px solid #a99deb;
}
</style>
</head>
<body>
<center>NME LIST</center>
<center>
<table border="2">
<tr>
<th>ROLL_NO</th>
<th>NAME</th>
<th>MAJOR</th>
<th>NME DEPT</th>
<th>SUB NAME</th>
<th>SUB CODE</th>
</tr>
<?php
$hostname="localhost";
$username="root";
$password="";
$database="nme";
$con=new mysqli($hostname,$username,$password,$database);
if(!$con)
{
die('connection failed'.mysql_error());
}
else
{
$SELECT="SELECT*From nme_choosing_list";
$res=$con->query($SELECT);
if($res->num_rows>0)
{
 
    $SELECT1="SELECT*From nme_choosing_list";
    $res=$con->query($SELECT1);
   $row=$res->num_rows>0;
   while($row = $res->fetch_assoc())
{ 
?>
   <tr>
     <td><?php echo $row['Roll_No']; ?></td>
     <td><?php echo $row['Name']; ?></td>
     <td><?php echo $row['Major']; ?></td>
     <td><?php echo $row['NME_Dept']; ?></td>
     <td><?php echo $row['Subject_Name']; ?></td>
     <td><?php echo $row['Sub_Code']; ?></td>
    </tr>
<?php 
}
?>

</table>
</center>
<?php
}
}

 ?>
</body>
</html>