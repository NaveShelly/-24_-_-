<?php 
include 'database.php';
$Child_ID= $_POST['Child_ID'];
$password= $_POST['password'];
$sql = "UPDATE adult SET password=$password WHERE Child_ID='$Child_ID'";
$result = $conn->query($sql);
if ($conn->query($sql)==TRUE)
{
    echo json_encode(array("statusCode"=>200));
} 
else
{
    echo json_encode(array("statusCode"=>201));
}
	mysqli_close($conn);
?>