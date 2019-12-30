<?php
	include 'database.php';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	    $grade=$_POST['grade'];
		$sql = "INSERT INTO `users`( `name`, `email`, `password`, `grade`) 
	    VALUES ('$name','$email','$password','$grade')";
	        if (mysqli_query($conn, $sql)) {
		        echo json_encode(array("statusCode"=>200));
	        } 
	        else {
		        echo json_encode(array("statusCode"=>201));
	        }

		mysqli_close($conn);

?>
 