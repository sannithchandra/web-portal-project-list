<html>
<head>
         <br></br>
	<title>Add project details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>

<body>
	<center><a href="index1.php" class="btn btn-info">Go to Home</a></center>
	<br/><br/>

	<form action="add1.php" method="post" name="form1" >
		<table width="100%" border="5" class="table">
			<tr> 
				<td>batch</td>
				<td><input type="text" name="batch"></td>
			</tr>
			<tr> 
				<td>rollno</td>
				<td><input type="text" name="rollno"></td>
			</tr>
			<tr> 
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
<tr> 
				<td>uploadfile</td>
				<td><input type="file" name="uploadfile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" class="btn btn-primary"></td>
			</tr>
		</table>

	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$batch = $_POST['batch'];
		$rollno = $_POST['rollno'];
		$name = $_POST['name'];        
		$uploadfile = $_POST['uploadfile'];
		
		// include database connection file
		include_once("config1.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(batch,rollno,name,uploadfile) VALUES('$batch','$rollno','$name','$uploadfile')");
		
		// Show message when user added
		echo "<b>details added successfully</b> <a href='index1.php'><b>View Project details</b></a>";
	}
	?>

  
</body>
</html>
