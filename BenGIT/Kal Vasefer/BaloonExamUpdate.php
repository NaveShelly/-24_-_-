<?php 
include 'database.php';
$grade= $_POST['firstname'];
$id=$_POST['lastname'];
	$sql = "UPDATE child SET grade2=$grade WHERE Child_ID='$id'";
	$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
	mysqli_close($conn);
	
	
?>
