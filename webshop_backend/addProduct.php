

<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>adding new products</title>
</head>
  
<body>
    <center>
        <h1>Storing Form data in Database</h1>
  
        <form action="addproducts.php" method="post">
              
              
<p>
                <label for="productname">Product Name:</label>
                <input type="text" name="productname" id="productname">
            </p>
  
  
  
              
              
<p>
                <label for="quantity">amount of stock:</label>
                <input type="number" name="quantity" id="quantity">
            </p>
  
  
  
              
              
<p>
                <label for="description">description:</label>
                <input type="text" name="description" id="description">
            </p>
  
  
              
              
              
<p>
                <label for="price">price:</label>
                <input type="number" name="price" id="price">
            </p>
  
  
              
            <input type="submit" value="Submit" >
        </form>
    </center>
</body>
  
</html>