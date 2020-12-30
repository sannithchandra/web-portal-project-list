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

<div class="container"> 
 <center><button class="btn btn-primary">Major Project details</button> </center> <br></br>

    <table width='90%' border=3 class="table">

    <tr>
        <th>Batch</th> <th>rollno</th> <th>name</th> <th>Projectdetails</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['batch']."</td>";
        echo "<td>".$user_data['rollno']."</td>";
        echo "<td>".$user_data['name']."</td>";  
        echo "<td>".$user_data['uploadfile']."</td>";  

             
    }

    ?>

    </table>
</div>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  

</body>
</html>
