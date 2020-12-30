<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("config1.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<html>
<head>    
    <title>Homepage</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
     
   
</head>

<body>
<br></br>
<center><a href="add1.php" class="btn btn-info">Add New Project Details</a></center>
<div class="container"> 

    <table width='90%' border=2 class="table">

    <tr>
        <th>Batch</th> <th>rollno</th> <th>name</th> <th>uploadfile</th> <th>edit</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['batch']."</td>";
        echo "<td>".$user_data['rollno']."</td>";
        echo "<td>".$user_data['name']."</td>";  
        echo "<td>".$user_data['uploadfile']."</td>";  

        echo "<td><a href='edit1.php?id=$user_data[id]'>Edit</a> | <a href='delete1.php?id=$user_data[id]' >Delete</a></td></tr>";        
    }

    ?>
<a href="logout.php" class="btn btn-danger">Sign out</a><br></br>
    </table>
</div>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  

</body>
</html>
