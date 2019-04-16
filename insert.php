<?php
	include 'dbConnect.php';
?>
<body background="bg2.gif">
<hr color ="orange">
<br>	
<center>
<h1>Insert new Students details</h1><br>

<hr color ="orange">
<br>
</center>
<center><br><br>
	<form method="post">
		<div class="form-group">
    		<label>Enrollment Number</label>
    		<input type="number" class="form-control" name="roll" placeholder="Enrollment Number">
  		</div><br>
  		<div class="form-group">
    		<label>Name</label>
    		<input type="text" class="form-control" name="name" placeholder="Name">
  		</div><br>
  		<div class="form-group">
    		<label>Semester</label>
    		<input type="number" class="form-control" name="semester" placeholder="semester">
  		</div><br>
  		<div class="form-group">
    		<label>CGPA</label>
    		<input type="text" class="form-control" name="cgpa" placeholder="CGPA">
  		</div><br>
  		<div class="form-group">
    		<label>Branch</label>
    		<input type="text" class="form-control" name="branch" placeholder="branch">
  		</div><br><br>
  		 <input type="submit" class="btn btn-primary" value="Click to insert this info" name="transfer">
	</form>
</center>
<?php	
	if(isset($_POST["transfer"])){
	$rollNumber=$_POST['roll'];
	$name=$_POST['name'];
	$sem=$_POST['semester'];
	$branch=$_POST['branch'];
	$cgpa=$_POST['cgpa'];
	$sql="INSERT INTO `student`  VALUES ('$rollNumber','$name','$branch','$sem','$cgpa')";
	$res=mysqli_query($conn,$sql);
	if($res)
		echo("Student information added successfully");
	else
		echo("Error Uploading Information. Please check all entries and try again");

	}
?>
	<h2>
	<br><br><a href="index.php">Click here</a> to go to previous page. </h2>
