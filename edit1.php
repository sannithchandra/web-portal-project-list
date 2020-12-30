<?php
// include database connection file
include_once("config1.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$batch=$_POST['batch'];
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$uploadfile=$_POST['uploadfile'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET batch='$batch',rollno='$rollno',name='$name',uploadfile='$uploadfile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index1.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$batch = $user_data['batch'];
	$rollno= $user_data['rollno'];
	$name= $user_data['name'];
                $uploadfile= $user_data['uploadfile'];

}
?>
<html>
<head>	
	<title>Edit User Data</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>

<body>
        <br/>
	<center><a href="index1.php" class="btn btn-info">Home</a></center>
	<br/>
	
	<form name="update_user" method="post" action="edit1.php">
		<table width='100%' border="2" class="table">
			<tr> 
				<td>batch</td>
				<td><input type="text" name="batch" value=<?php echo $batch;?>></td>
			</tr>
			<tr> 
				<td>rollno</td>
				<td><input type="text" name="rollno" value=<?php echo $rollno;?>></td>
			</tr>
			<tr> 
				<td>name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
                        <tr> 
				<td>uploadfile</td>
				<td><input type="file" name="uploadfile" value=<?php echo $uploadfile;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>

	</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
</body>
</html>

