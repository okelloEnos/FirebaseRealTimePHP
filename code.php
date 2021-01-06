<?php

session_start();
include('includes/dbConfig.php');

if (isset($_POST['save_data'])) {
	# code...
	$username = $_POST['username'];
	$useremail = $_POST['email'];
	$userphone = $_POST['phone'];

	$data = [
		'username' => $username,
		'email' => $useremail,
		'phoneNo' => $userphone

	];

	$ref = "contact/";
	$postdata = $database->getReference($ref)->push($data);

	if ($postdata) {
		# code...
		$_SESSION['status'] = "Data Inserted SuccessFully";
		header("Location: index.php");
	} else {
		# code...
		$_SESSION['status'] = "Data Not Inserted";
		header("Location: index.php");
	}
	
}