<!doctype html>
<head>
	<title>Student API</title>
</head>
<body background="bg2.gif">
	<?php
		include 'dbConnect.php'
	?>
<center>
  	<div class="card" style="width: 18rem;">
  	<div class="card-body">
  		<hr color="orange">
    <h1 class="card-title">List Of All Students In our Database</h1>
    <hr color="orange">
    <br><br>
    <p class="card-text">
    	<?php
            $query = mysqli_query($conn, "SELECT * FROM student");
              $numrows = mysqli_num_rows($query);
              if($numrows !=0)
              {
                    while($row = mysqli_fetch_assoc($query))
                    {
                    echo "Enrollment Number: ";
                      echo $row['enrollmentNumber'];
                      echo "<br>";
                      echo "Name: ";
                      echo $row['name'];
                      echo "<br>";
                      echo "Branch: ";
                      echo $row['branch'];
                      echo "<br>";
                      echo "Semester: ";
                      echo $row['semester'];
                      echo "<br>";
                      echo "CGPA: ";
                      echo $row['cgpa'];
                      echo "<br>";
                      echo "<br>";
                      echo "<br>";
                    }
              }
            ?>
    </p>
    <hr color="orange">
    <a href="insert.php" class="btn btn-primary">Insert Data</a><br><br>
    <a href="update.php" class="btn btn-primary">Update Data</a><br><br>
    <a href="delete.php" class="btn btn-primary">Delete Data</a>
  </div>
</div>

</center>
</body>
