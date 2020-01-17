<?php
	include 'database.php';
		$type=$_POST['type'];
		$priority=$_POST['priority'];
		$msg=$_POST['msg'];
		$sql = "INSERT INTO `report`( `type`, `priority`,`msg`) 
	    VALUES ('$type','$priority','$msg')";
	    if (mysqli_query($conn, $sql)) {
		        echo json_encode(array("statusCode"=>200));
	        } 
	        else {
		        echo json_encode(array("statusCode"=>201));
	        }

		mysqli_close($conn);

?>
 