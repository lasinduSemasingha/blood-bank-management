<?php
   include('./DB/config.php');
   $msg = "";

   if(isset($_POST['submit'])) {
 
    $name =  $_POST['name'];
    $amount =  $_POST['amount'];
    $bGroup =  $_POST['bGroup'];
 
    $sql = "INSERT INTO `newdonation` (`name`, `amount`, `bGroup`) VALUES ('$name', '$amount', '$bGroup')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            $msg = "Successful";
        }else{
            $msg = "failed try again";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Donate</title>
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
            <h1>Make a Donation</h1>
            <input type="text" value="" required placeholder="Name" id="name" name="name" />
            <input type="text" value="" required placeholder="Amount" id="amount" name="amount" />
            <input type="text" value="" required placeholder="Blood Group" id="bGroup" name="bGroup" />
    
            <p class="error-message" id="error-message"><?php echo $msg; ?></p>
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
    <script src="./JS/script.js"></script>
</body>
</html>
