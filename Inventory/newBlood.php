<?php
   include('../DB/config.php');

   $msg = "";

   if(isset($_POST['submit'])) {
 
    $bType =  $_POST['bType'];
    $quantity =  $_POST['quantity'];
    $branch =  $_POST['branch'];
 
    $sql = "INSERT INTO `inventory` (`bType`, `quantity`, `branch`) VALUES ('$bType', '$quantity', '$branch')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            $msg = "Successfully Added";
        }else{
            $msg = "Adding unsuccess";
        }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add inventory</title>
		<link rel="icon" href="../resources/ico.png">
        <link href="../CSS/login.scss" rel="stylesheet" type="text/css">
    </head>
<body>
	<div class="top">
        <a class="index" href="inventory.php">
            <img src="../resources/ico.png" alt="RubyCare">
            <h1>Health First</h1>
        </a>
    </div>
    
    <div class="login-block">
        <form method="post">
            <h1>Add Inventory</h1>
            <input type="text" value="" required placeholder="blood Group" id="bType" name="bType" />
            <input type="text" value="" required placeholder="Quantity" id="quantity" name="quantity" />
            <input type="text" value="" required placeholder="Health First Bank Branch" id="branch" name="branch" />
                
            <p class="error-message"><?php echo $msg; ?></p>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form><br />
        <button onClick="window.location.href='inventory.php'">Back to Inventory</button>
    </div>
    
    <script src="../JS/script.js"></script>
</body>
</html>
