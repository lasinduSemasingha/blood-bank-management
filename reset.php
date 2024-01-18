<?php
include ('./DB/config.php');
$msg ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $email = $_POST["email"];
    $newPassword = $_POST["pass"];

   
    $query = "SELECT * FROM user WHERE username = '$username' AND email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        
        $updateQuery = "UPDATE user SET password = '$newPassword' WHERE username = '$username' AND email = '$email'";
        $conn->query($updateQuery);

        sleep(3);
        header('location: login.php');
    } else {
        $msg = "Invalid username or email";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Password Reset</title>
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
		<form method="post" onSubmit="return validate();">
			<h1>Password Reset</h1>
			<input type="text" value="" placeholder="Enter Registered Username" name="user" />
            <input type="email" value="" placeholder="Enter registered email" name="email" />
			<input type="password" value="" placeholder="Enter New Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
            <p><?php echo $msg ?></p>
			<button name="submit">Reset</button><br /><br />
		</form>
	</div>
    <script src="./JS/script.js"></script>
</body>
</html>
