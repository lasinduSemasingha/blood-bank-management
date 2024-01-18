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
    <form method="post" onSubmit="return validate();">
        <div class="login-block">
            <h1>Feedback</h1>
            <input type="text" value="" required placeholder="Name" id="name" name="name" />
                <label class="container">Very Bad
                    <input type="radio" value="Very Bad" name="level">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Bad
                    <input type="radio" value="Bad" name="level">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Good
                    <input type="radio" value="Good" name="level">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Very Good
                    <input type="radio" value="Very Good" name="level">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Excellent
                    <input type="radio" value="Excellent" name="level">
                    <span class="checkmark"></span>
                </label>
            <input type="text" cols="30" rows="10" placeholder="Comment" id="comment" name="comment" />
            
            <p class="error-message" id="error-message"><?php echo $msg; ?></p>
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>
    </form>
    <script src="../JS/script.js"></script>
</body>
</html>
