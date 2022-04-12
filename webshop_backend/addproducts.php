<?php
$conn = mysqli_connect("localhost", "root", "", "webshop_database");
          
          // Check connection
          if($conn === false){
              die("ERROR: Could not connect. " 
                  . mysqli_connect_error());
          }
            
          // Taking all 5 values from the form data(input)
          $name =  $_REQUEST['productname'];
          $quantity = $_REQUEST['quantity'];
          $description =  $_REQUEST['description'];
          $price = $_REQUEST['price'];
            
          // Performing insert query execution
          // here our table name is college
          $sql = "INSERT INTO products (name, quantity, description, price)
          VALUES (' $name', '$quantity','$description','$price')";
            
          if(mysqli_query($conn, $sql)){

          } else{
              echo "ERROR: Hush! Sorry $sql. " 
                  . mysqli_error($conn);
          }
            
          // Close connection
          mysqli_close($conn);

          ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
          <h1 class="position-absolute top-50 start-50 translate-middle"> succesfully added
          <a href="read.php" ><button>go back to read</button></a>


</body>
