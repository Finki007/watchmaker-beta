<?php
	include '../classes/database.php';
	
	$username = $_POST['wmUserName'];
	$password = $_POST['wmPassword'];
	
	$data = new clsDBAccess('root', '', 'localhost');
	
	$test = $data->GetData('watchmaker', 'Select * From watchmaker.user');
	
	while($row = mysqli_fetch_array($test)){
		if($row['user_name'] == $username and $row['user_password'] == $password){
			$_SESSION['id'] = "hallo";
			header("Location: ../index.php?login=true&username=$username");			
		}else{
			header("Location: ../index.php?login=false&username=$username");
		}
	}	
?>