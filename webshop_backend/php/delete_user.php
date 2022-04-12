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

	$sql = "DELETE FROM users
	        WHERE id=$id";
   $result = mysqli_query($link, $sql);
   if ($result) {
   	  header("Location: ../users.php?success=successfully deleted");
   }else {
      header("Location: ../users.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../users.php");
}