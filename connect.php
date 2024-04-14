<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$dobAD = $_POST['dobAD'];
	$dobBS = $_POST['dobBS'];
	$placeOfBirth = $_POST['placeOfBirth'];
	$birthCountry = $_POST['birthCountry'];
	$nationality = $_POST['nationality'];
	$fatherLastName = $_POST['fatherLastName'];
	$fatherFirstName = $_POST['fatherFirstName'];
	$motherLastName = $_POST['motherLastName'];
	$motherFirstName = $_POST['motherFirstName'];
	$motherFirstName = $_POST['motherFirstName'];


	// Database connection
	$conn = new mysqli('localhost','khadk','','royal');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration1(firstName, lastName, gender, dobAD, dobBS, placeOfBirth, birthCountry, nationality, fatherLastName, fatherFirstName, motherLastName, motherFirstName) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiisssssss", $firstName, $lastName, $gender, $dobAD, $dobBS, $placeOfBirth, $birthCountry, $nationality, $fatherLastName, $fatherFirstName, $motherLastName, $motherFirstName);
        $stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>