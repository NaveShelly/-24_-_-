<?php
	include 'database.php';
		$Child_ID=$_POST['Child_ID'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql = "INSERT INTO `adult`( `Child_ID`, `email`, `password`) 
	    VALUES ('$Child_ID','$email','$password')";
	    if (mysqli_query($conn, $sql)) {
		        echo json_encode(array("statusCode"=>200));
	        } 
	        else {
		        echo json_encode(array("statusCode"=>201));
	        }

		mysqli_close($conn);

?>
 