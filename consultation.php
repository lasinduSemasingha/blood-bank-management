<?php
   include('./DB/config.php');
   $msg = "";

   if(isset($_POST['submit'])) {
 
    $location =  $_POST['location'];
    $date =  $_POST['date'];
 
    $sql = "INSERT INTO `consultation` (`location`, `date`) VALUES ('$location', '$date')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            
            
            header("Location: services.php");
            echo "Booking successful";
            sleep(2);
        }else{
            $msg="Booking unsuccessful";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Consultation</title>
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
    <form method="post">
        <div class="login-block">
            <h1>Enter Details</h1>
                <input type="text" value="" required placeholder="Enter Location" id="flocation" name="location" />
                <input type="date" value="" required id="date" name="date" />
                <p><?php echo $msg ?></p>
            <button type="submit" name="submit" id="submit">Book</button>
        </div>
    </form>
    <script src="./JS/script.js"></script>
</body>
</html>
