<?php
    include('./DB/config.php');


session_start();


if (isset($_SESSION['userId'])) {

    $isLoggedIn = true;
} else {

    $isLoggedIn = false;
}


if (!$isLoggedIn && isset($_POST['login'])) {
    header("Location: login.php");
    exit();
}


if ($isLoggedIn && isset($_POST['logout'])) {
    unset($_SESSION['user_id']);
    header("Location: index.php");
    exit();
}

?>
<?php
    $msg="";
   if(isset($_POST['submit'])) {
 
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $message =  $_POST['message'];
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    
    $result = $conn->query($sql);

        if($result == TRUE) {
            $msg="Message Sent";
        }else{
            $msg="Message send failed";
        }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Contact Us
        </title>
        <link rel="icon" href="./resources/ico.png">
        <link rel="stylesheet" href="./CSS/style.scss">
    </head>
    <body>
        <div class="top">
            <a class="index" href="./index.php">
                <img src="./resources/ico.png" alt="RubyCare">
                <h1>Health First</h1>
            </a>
            <?php if ($isLoggedIn): ?>
                <a type="submit" class="log" href="./User/profile.php">Profile</a>
                <a type="submit" class="log" href="./logout.php">Sign Out</a>
            <?php else: ?>
            <form action="index.php" method="post">
                <a type="submit" class="log" href="./login.php">Login</a>
                <a type="submit" class="log" href="./signup.php">Sign Up</a>
            </form>
            <?php endif; ?>
        </div>
        <div class="navb">
            <a href="index.php">Home</a>
            <a href="./Hospitals/hospitals.php">Hospitals</a>
            <a href="">Laboratories</a>
            <a href="">Services</a>
            <a href="">Contact</a>
            <a href="about.php">About</a>
            <form action="search.php" method="get">
                <button type="text" id="search" name="search">Search</button>
                <input type="text" id="search" placeholder="Search Services" name="search">
            </form>
        </div><br />
        <div class="mainbox">
            <div class="box1">

                <div class="box2">
                    <div class="email">
                        <h4>Email : </h4>
                        <h5>company@healthfirst.com</h5>
                    </div>
                    <div class="mobile">
                        <h4>Mobile : </h4>
                        <h5>+94-76-467-8565</h5>
                    </div>
                    <div class="mobile">
                        <h4>Address : </h4>
                        <h5>No. 45, Colombo 7</h5>
                    </div>
                </div>
                <div class="box3">
                    
                    <form method="post">
                        <input required type="text" name="name" placeholder="Your Name"><br><br>
                        <input required type="email" name="email" placeholder="Your Email"><br><br>
                        <textarea required name="message" placeholder="Type Here..." id="" cols="30" rows="10"></textarea><br><br>
                        <p><?php echo $msg;?></p>
                        <input type="submit" name="submit">
                    </form>
                    
                </div>
            </div>
        </div><br />
        <footer class="foot">
            <div class="category">
                <div class="link">
                    <ul style="list-style-type:none;">
                    <h4>Quick Links</h4>
                        <li><a href="">Laboratories</a></li>
                        <li><a href="./Hospitals/hospitals.php">Hospitals</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="highlights">
                    <ul style="list-style-type:none;">
                        <h4>Highlights</h4>
                        <li><a href="">Donations</a></li>
                        <li><a href="">Locations</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Branchs</a></li>
                    </ul>
                </div>
                <div class="social">
                    <h4>Social Media</h4>
                    <a href="#"><img src="./resources/whatsapp.png" alt="whatsappp"></a>
                    <a href="#"><img src="./resources/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="./resources/instagram.png" alt="instagram"></a>
                    <a href="#"><img src="./resources/linkedin.png" alt="linkedin"></a>
                </div>
                <div class="mission">
                    <h4>Join our Mission</h4>
                    <p>
                    Join Health First in saving lives through blood donation.
                    </p>
                </div>
            </div>
        </footer>
        <div class="under">
            <p>© 2023 Lasindu semasingha. All Right Reserved</p>
        </div>
    </body>
</html>
