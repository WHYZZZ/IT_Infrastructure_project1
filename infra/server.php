<?php 
	session_start();

  
	// variable declaration
    $errors = array(); 
    $msg="";
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'hrmsystem');

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$id = mysqli_real_escape_string($db, $_POST['id']);
		$password = mysqli_real_escape_string($db, $_POST['psw']);
       
			$query = "SELECT * FROM employees WHERE Emp_id='$id' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['id'] = $id;
				$_SESSION['success'] = "You are now logged in";
				header('location: private_office.php');
			}else {
				$msg = "Invalid Username or Password!";
			}
		}
    
	if (isset($_POST['logout_user'])) {
    session_start();
unset($_SESSION["id"]);
unset($_SESSION["password"]);
unset($_SESSION['success'] );
header("Location:index.php");
    }

?>