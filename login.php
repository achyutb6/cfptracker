<?php
	session_start();
	$error_flag = FALSE;

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"sus");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	$email = $name = $password = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];

			$_SESSION["sess_email"] = $email;
			$_SESSION["sess_name"] = $name;
			$result = mysqli_query($conn,"INSERT into users values ('$name','$email','$password');");
			echo $result;
			header('Location: update.php');
			exit();
		}
?>