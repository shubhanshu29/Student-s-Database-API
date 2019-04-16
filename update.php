<?php
	include 'dbConnect.php';
?>
<body background="bg2.gif">
<hr color ="orange">
<br>	
<center>
<h1>Update Students details</h1><br>

<hr color ="orange">
<br>
</center>
<center><br><br>
	<form method="post">
		<div class="form-group">
    		<label >Old Enrollment Number</label>
    		<input type="number" class="form-control" name="oldrol" placeholder="Old Enrollment Number">
  		</div><br>
  		<div class="form-group">
    		<label >New Enrollment Number</label>
    		<input type="number" class="form-control" name="newrol" placeholder="Enter updated Enrollment Number">
  		</div><br>
  		<div class="form-group">
    		<label>Name</label>
    		<input type="text" class="form-control" name="nam" placeholder="Enter updated Name">
  		</div><br>
  		<div class="form-group">
    		<label>Semester</label>
    		<input type="number" class="form-control" name="sem" placeholder="Enter updated semester">
  		</div><br>
  		<div class="form-group">
    		<label>CGPA</label>
    		<input type="text" class="form-control" name="cg" placeholder="Enter updated CGPA">
  		</div><br>
  		<div class="form-group">
    		<label>Branch</label>
    		<input type="text" class="form-control" name="bran" placeholder="Enter updated branch">
  		</div><br><br>

		<input type="submit" value="Click to update this info" name="transfer">
	</form>
</center>


<?php

if(isset($_POST["transfer"])){
   $oldroll=$_POST['oldrol'];
   $newroll=$_POST['newrol'];
   $name=$_POST['nam'];
   $branch=$_POST['bran']; 
   $newsem=$_POST['sem']; 
   $newcgpa=$_POST['cg']; 
   $sql = "UPDATE student SET name='$name',enrollmentNumber='$newroll' ,cgpa='$newcgpa',semester='$newsem',branch='$branch'  WHERE enrollmentNumber='$oldroll' ";

   $res=mysqli_query($conn,$sql);
   if($res)
		echo("Student information updated successfully");
	else
		echo("Error Updating Information. Please check all entries and try again");
}
?>
	<h2>
	<br><br><a href="index.php">Click here</a> to go to previous page. </h2>