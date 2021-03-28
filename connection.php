<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pin = $_POST['pin'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','project');
if($conn->connect_error)
{
	die('connection failed :'.$conn->connect_error);
}
else
{
	$stmt = $conn->prepare("insert into user(firstname,lastname,pin,email,password)values(?,?,?,?,?)");
	$stmt->bind_param("ssisi",$firstname,$lastname,$pin,$email,$password);
	$stmt->execute();
	echo "register successfully";
	$stmt->close();
	$conn->close();
}
?>