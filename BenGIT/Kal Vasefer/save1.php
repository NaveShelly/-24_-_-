<?php
        include 'database.php';
        $Child_ID=$_POST['Child_ID'];
		$password=$_POST['password'];
		$check=mysqli_query($conn,"select * from child where Child_ID='$Child_ID' and password='$password'");
		if (mysqli_num_rows($check)>0)
		{
		    	$_SESSION['Child_ID']=$Child_ID;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
?>