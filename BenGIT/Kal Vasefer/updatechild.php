<?php 
include 'database.php';
$Child_ID= $_POST['Child_ID'];
$password= $_POST['password'];
$grade1= $_POST['grade1'];
$grade2= $_POST['grade2'];
$grade3= $_POST['grade3'];
$sql = "UPDATE child SET password=$password,grade1=$grade1,grade2=$grade2,grade3=$grade3 WHERE Child_ID='$Child_ID'";
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