<?php
include 'dbConnect.php';
?>
<body background="bg2.gif">
<hr color ="orange">
<br>	
<center>
<h1>Delete Students details</h1><br>

<hr color ="orange">
<center><br><br>
<form method="post">
	<div class="form-group">
    		<label>Enter the roll number to be deleted:</label>
    		<input type="number" class="form-control" name="del" placeholder="Enrollment Number">
  	</div>
	<br><br>
	<input type="submit" value="Click here to delete the above student from database" name="delete">
</form>
</center>

<?php
if(isset($_POST["delete"])){
	$rollTBD=$_POST['del'];
	
	$sql="DELETE FROM student WHERE enrollmentNumber='$rollTBD'";
	$res=mysqli_query($conn,$sql);
	if($res)
		echo ("Given Student deleted successfully");
	else
		echo("Error deleting information. Check your entry again and then continue");
	
}
?>
</center>
	<h2>
	<br><br><a href="index.php">Click here</a> to go to previous page. </h2>