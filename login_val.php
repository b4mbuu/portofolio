<?php
session_start(); 
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$user_check_query = "SELECT * FROM users WHERE email='$email'";
	$user_check = $dbcon -> query($user_check_query);
	
	if($user_check->num_rows==0){

		// if username not match

		$email_not_matched = "Таны имэйл таарахгүй байна!";
	}else{

		// if username match

		$row = $user_check->fetch_assoc();
		if(password_verify($password, $row['password'])){

			// if password matched
			// status check
			if($row['status']==1){
				$waiting = "Админы зөвшөөрлийг хүлээж байна";
			} else{
				// good to go 
				$_SESSION['user_email'] = $email;
				$_SESSION['user_name']  = $row['fname'];
				$_SESSION['photo']      =$row['photo'];
				header('location: admin/index.php');
			}

			

		}else {
			// if password not matched

			$password_not_matched = "Таны нууц үг таарахгүй байна";
		}
	}
}


?>