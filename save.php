<?php
	include 'database.php';
		$Child_ID=$_POST['Child_ID'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	    $grade1=$_POST['grade1'];
	    $grade2=$_POST['grade2'];
	    $grade3=$_POST['grade3'];
		$sql = "INSERT INTO `child`( `Child_ID`, `email`, `password`, `grade1`,`grade2`,`grade3`) 
	    VALUES ('$Child_ID','$email','$password','$grade1','$grade2','$grade3')";
	    if (mysqli_query($conn, $sql)) {
		        echo json_encode(array("statusCode"=>200));
	        } 
	        else {
		        echo json_encode(array("statusCode"=>201));
	        }

		mysqli_close($conn);

?>
 