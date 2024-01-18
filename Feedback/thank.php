<?php
   include('../DB/config.php');

   $msg = "";

   if(isset($_POST['submit'])) {
 
    $level =  $_POST['level'];
    $name =  $_POST['name'];
    $comment =  $_POST['comment'];
 
    $sql = "INSERT INTO `feedback` (`level`, `name`, `comment`) VALUES ('$level', '$name', '$comment')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            header("Location: thank.php");
        }else{
            $msg = "Unsuccessful";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Feedback</title>
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
    
    <div class="cent">
        <h1>Thank You for your Feedback</h1>
        <button onClick="window.location.href='../index.php'">Return Home</button>
    </div>

    <script src="../JS/script.js"></script>
</body>
</html>
