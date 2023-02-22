<?php
	$firstName = $_POST['fname'];
	$lastName = $_POST['uname'];
	$email = $_POST['mail'];
	$password = $_POST['pw'];
	$number = $_POST['pnumber'];

	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $firstName, $lastName, $email, $password, $number);
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>