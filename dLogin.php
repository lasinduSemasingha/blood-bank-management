<?php
include ('./DB/config.php');
session_start();

if (isset($_SESSION['userId'])) {
    header("Location: index.php");
    exit();
}

if(isset($_POST['submit'])) {
   
    $username = $_POST['user'];
    $password = $_POST['pass'];

	$sql = "select userId from user where username = '$username' and password = '$password'";
	$result = mysqli_query($conn, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result); 

	if($count == 1){  
		if($username == 'lasdil2001' && $password == 'Hasine$1992'){
			$_SESSION['userId'] = $row['userId'];
        	header("Location: ./Admin/admin.php");
        	exit(); 
		}else if($username == 'kavindu' && $password == 'Kavindu$2001'){
			$_SESSION['userId'] = $row['userId'];
        	header("Location: ./Staff/doctors.php");
        	exit(); 
		}
		else if($username == 'achintha' && $password == 'Achintha@2001'){
			$_SESSION['userId'] = $row['userId'];
			header("Location: ./Inventory/inventory.php");
			exit(); 
		}
		else{
			$_SESSION['userId'] = $row['userId'];
        	header("Location: donate.php");
        	exit(); 
		}
	}  
	else{  
		echo "<h1> Login failed. Invalid username or password.</h1>";  
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
		<link rel="icon" href="./resources/ico.png">
        <link href="./CSS/login.scss" rel="stylesheet" type="text/css">
    </head>
<body>
	<div class="top">
            <a class="index" href="./index.php">
                <img src="./resources/ico.png" alt="RubyCare">
            </a>
            <h1>Health First</h1>
    </div>
	<div class="login-block">
		<form method="post">
			<h1>Donor Login</h1>
			<input type="text" value="" placeholder="Username" name="user" />
			<input type="password" value="" placeholder="Password" name="pass" />
			<button name="submit">Submit</button><br /><br />
			
		</form>
		<button onClick="window.location.href='reset.php'">Reset Password</button>
	</div>
</body>
</html>
