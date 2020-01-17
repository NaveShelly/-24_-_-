<?php
	include 'database.php';
	$Child_ID=$_POST['Child_ID'];
	$sql = "SELECT grade1 FROM child where Child_ID='$Child_ID'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();
		echo json_encode(array("statusCode"=>$row['grade1']));
	}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>