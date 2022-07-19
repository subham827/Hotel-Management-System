<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	
	$password = $_POST["password"];
	$phone = $_POST["phone"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$idproof = $_POST["idproof"];
	$dob = $_POST["dob"];
	$sql = "INSERT INTO user_login(phone, password, name, email, idproof, dob) VALUES('$phone', '$password', '$name', '$email', '$idproof', '$dob')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: user_created.php");
	}
	else
	{
		header("Location: user_not_created.php");
	}
?>
</body>
</html>