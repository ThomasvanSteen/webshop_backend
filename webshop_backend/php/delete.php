<?php  

if(isset($_GET['id'])){
   include "../config.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM products
	        WHERE id=$id";
   $result = mysqli_query($link, $sql);
   if ($result) {
   	  header("Location: ../read.php?success=successfully deleted");
   }else {
      header("Location: ../read.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../read.php");
}