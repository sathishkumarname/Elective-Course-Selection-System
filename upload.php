<html>
<?php
$connect = mysqli_connect('localhost','root','','nme')or die("Could not connect: ".mysqli_error($connect));

if (isset($_POST["import"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 2) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 1000, ",")) !== FALSE) {
            $sqlInsert = "INSERT into student_list (Name,Roll_No,DOB,Major,Status) values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "')";
            $result = mysqli_query($connect,$sqlInsert);}
            
            if (! empty($result)) {
                echo "<script> alert('CSV Data Imported into the Database'); </script>";
            } else {
                echo "<script> alert('Problem in Importing CSV Data'); </script>";
            }
}
}
?>
<body>
<body background="logo1.jpg">
<h3>
<center>
<form class="form-horizontal" action="" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row">
        <label class="col-md-4 control-label">Choose CSV File &nbsp;&nbsp;&nbsp;</label> <input
            type="file" name="file" id="file" accept=".csv"><p></p>
        <button type="submit" id="submit" name="import"
            class="btn-submit">Import</button>
        <br />

    </div>
    <div id="labelError"></div>
</form>
		<p align='center'><a href='options.php'>Back</a></p>

</center>
</h3>
</body>
</html>