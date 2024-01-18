<?php
   include('../DB/config.php');

   if(isset($_POST['submit'])) {
 
    $sName =  $_POST['sName'];
    $sType =  $_POST['sType'];
    $location =  $_POST['location'];
 
    $sql = "INSERT INTO `service` (`sName`, `sType`, `location`) VALUES ('$sName', '$sType', '$location')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            echo "&nbsp&nbsp&nbspRegistration successfull";
            header("Location: doctors.php");
        }else{
            echo "Error";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Service</title>
		<link rel="icon" href="../resources/ico.png">
        <link href="../CSS/login.scss" rel="stylesheet" type="text/css">
    </head>
<body>
	<div class="top">
        <a class="index" href="../index.php">
            <img src="../resources/ico.png" alt="RubyCare">
            <h1>Health First</h1>
        </a>
    </div>
    <form method="post" onSubmit="return validate();">
        <div class="login-block">
            <h1>Add Service</h1>
                <input type="text" value="" required placeholder="Service Name" id="sName" name="sName" />
                <input type="text" value="" required placeholder="Service Type" id="sType" name="sType" />
                <input type="text" value="" required placeholder="Service Location" id="location" name="location" />
            <p class="error-message" id="error-message"></p>
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
    <script src="../JS/script.js"></script>
</body>
</html>
