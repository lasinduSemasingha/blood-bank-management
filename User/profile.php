<?php include('../DB/config.php'); ?>
<?php
session_start();


if (isset($_SESSION['userId'])) {

    $isLoggedIn = true;
} else {

    $isLoggedIn = false;
}


if (!$isLoggedIn && isset($_POST['login'])) {
    header("Location: ../login.php");
    exit();
}

if (!$isLoggedIn && isset($_POST['register'])) {
    header("Location: ../signup.php");
    exit();
}

if ($isLoggedIn && isset($_POST['logout'])) {
    unset($_SESSION['userId']);
    header("Location: ../index.php");
    exit();
}
?>
<?php

if (!isset($_SESSION['userId'])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION['userId'];
    $sql="SELECT * FROM `user` WHERE userId = $user_id";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['userId'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $address=$row['address'];
            $age=$row['age'];
            $bGroup=$row['bGroup'];
            $bBank=$row['bBank'];
            $hospital=$row['hospital'];
            $email=$row['email'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Health First
        </title>
        <link rel="icon" href="../resources/ico.png">
        <link rel="stylesheet" href="../CSS/style.scss">
    </head>
    <body>
        <div class="top">
            <a class="index" href="../index.php">
                <img src="../resources/ico.png" alt="RubyCare">
                <h1>Health First</h1>
            </a>
            <?php if ($isLoggedIn): ?>
                <a type="submit" class="log" href="../logout.php">Sign Out</a>
            <?php else: ?>
            <form action="index.php" method="post">
                <a type="submit" class="log" href="../login.php">Login</a>
                <a type="submit" class="log" href="../signup.php">Sign Up</a>
            </form>
            <?php endif; ?>
        </div>
        <div class="navb">
            <a href="../index.php">Home</a>
            <a href="../Hospitals/hospitals.php">Hospitals</a>
            <a href="">Laboratories</a>
            <a href="../services.php">Services</a>
            <a href="../Donation/schedule.php">Donations</a>
            <a href="">Contact</a>
            <a href="../about.php">About</a>
            <input type="text" placeholder="Search...">
        </div>
        <div class="head">
            <h1><?php echo $fname . " " . $lname . " " ?>Profile</h1>
        </div><br /><br />
        
            <?php
            echo '<div class="container">
            <ul class="responsive-table">
                <li class="table-row">
                    <div class="col col-1" ><strong>First Name</strong></div>
                    <div class="col col-2" >'.$fname.'</div>
                    <div class="col col-3" ><a href="fName.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Last Name</strong></div>
                    <div class="col col-2" >'.$lname.'</div>
                    <div class="col col-3" ><a href="lName.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Email</strong></div>
                    <div class="col col-2" >'.$email.'</div>
                    <div class="col col-3" ><a href="email.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Address</strong></div>
                    <div class="col col-2" >'.$address.'</div>
                    <div class="col col-3" ><a href="address.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Blood Group</strong></div>
                    <div class="col col-2" >'.$bGroup.'</div>
                    <div class="col col-3" ><a href="bGroup.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Age</strong></div>
                    <div class="col col-2" >'.$age.'</div>
                    <div class="col col-3" ><a href="age.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Nearest Blood Bank</strong></div>
                    <div class="col col-2" >'.$bBank.'</div>
                    <div class="col col-3" ><a href="bBank.php?updateid='.$id.'">Update</a></div>
                </li>
                <li class="table-row">
                    <div class="col col-1" ><strong>Hospital</strong></div>
                    <div class="col col-2" >'.$hospital.'</div>
                    <div class="col col-3" ><a href="nHospital.php?updateid='.$id.'">Update</a></div>
                </li>
            </ul>
            </div>';
            ?>
        
        
        <footer class="foot">
            <div class="category">
                <div class="link">
                    <ul style="list-style-type:none;">
                    <h4>Quick Links</h4>
                        <li><a href="">Laboratories</a></li>
                        <li><a href="../Hospitals/hospitals.php">Hospitals</a></li>
                        <li><a href="../about.php">About</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="highlights">
                    <ul style="list-style-type:none;">
                        <h4>Highlights</h4>
                        <li><a href="../Donation/schedule.php">Donation</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Branchs</a></li>
                    </ul>
                </div>
                <div class="social">
                    <h4>Social Media</h4>
                    <a href="#"><img src="../resources/whatsapp.png" alt="whatsappp"></a>
                    <a href="#"><img src="../resources/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../resources/instagram.png" alt="instagram"></a>
                    <a href="#"><img src="../resources/linkedin.png" alt="linkedin"></a>
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
        <script src="../JS/script.js"></script>
    </body>
</html>
