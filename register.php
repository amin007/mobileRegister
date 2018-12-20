<?php
if ($_SERVER['REQUEST_METHOD'] =='POST')
{
	if (isset($_POST['name']))
	{
		$name = $_POST['name'];
	}
	if (isset($_POST['email']))
	{
		$email = $_POST['email'];
	}
	if (isset($_POST['password']))
	{
		$password = $_POST['password'];
	}

	require_once 'connect.php';
	$sql = "INSERT INTO users_table (name, email, password) VALUES ('$name', '$email', '$password')";
	//echo '<pre>$sql='; print_r($sql); echo '</pre>';

	if ( mysqli_query($conn, $sql) )
	{
		$result["success"] = "1";
		$result["message"] = "success";
		echo json_encode($result);
		mysqli_close($conn);
	}
	else
	{
		$result["success"] = "0";
		$result["message"] = "error";
		echo json_encode($result);
		mysqli_close($conn);
	}//*/
}
?>