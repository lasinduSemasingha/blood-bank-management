<?php
   include('./DB/config.php');

   if(isset($_POST['submit'])) {
 
    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $fname =  $_POST['firstname'];
    $lname = $_POST['lastname'];
    $address =  $_POST['address'];
    $bGroup = $_POST['bGroup'];
    $age = $_POST['age'];
    $bBank = $_POST['bBank'];
    $hospital = $_POST['hospital'];
    $email = $_POST['email'];
 
    $sql = "INSERT INTO `user` (`username`, `password`, `fname`, `lname`, `address`, `bGroup`, `age`,`bBank`, `hospital`, `email`) VALUES ('$username', '$password', '$fname', '$lname', '$address', '$bGroup', '$age','$bBank', '$hospital', '$email')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            echo "&nbsp&nbsp&nbspRegistration successfull";
            header("Location: login.php");
        }else{
            echo "Username or Email Already Exists";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
		<link rel="icon" href="./resources/ico.png">
        <link href="./CSS/login.scss" rel="stylesheet" type="text/css">
    </head>
<body>
	<div class="top">
        <a class="index" href="./index.php">
            <img src="./resources/ico.png" alt="RubyCare">
            <h1>Health First</h1>
        </a>
    </div>
    <form method="post" onSubmit="return validate();">
        <div class="login-block">
            <h1>Register</h1>
            <div class="name">
                <input type="text" value="" required placeholder="First Name" id="firstname" name="firstname" />
                <input type="text" value="" required placeholder="LastName" id="lastname" name="lastname" />
            </div>
            <input type="text" value="" required placeholder="Address" id="address" name="address" />
            <div class="age">
                <input type="text" value="" required placeholder="Blood Group" pattern="(?=.*^(A|B|AB|O)[+-]?$" title="Wrong Blood type" id="bGroup" name="bGroup" />
                <input type="number" value="" required placeholder="Age" id="age" name="age" />
            </div>
            <div class="bank">
                <input type="text" value="" placeholder="Nearest Blood Bank" id="bBank" name="bBank" />
                <input type="text" value=""  placeholder="Nearest Hospital" id="hospital" name="hospital" />
            </div>
            <input type="text" value="" required placeholder="Username" id="username" name="username" />
            <input type="email" value="" required placeholder="email" id="email" name="email" />
            <div class="password">
                <input type="password" required value="" placeholder="Password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
                <input type="password" required value="" placeholder="Confirm Password" id="cPassword" />
            </div>
            <p class="error-message" id="error-message"></p>
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
    <script src="./JS/script.js"></script>
</body>
</html>
