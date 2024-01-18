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
    header("Location: ../register.php");
    exit();
}

if ($isLoggedIn && isset($_POST['logout'])) {
    unset($_SESSION['user_id']);
    header("Location: ../index.php");
    exit();
}
?>
<?php

if (!isset($_SESSION['userId'])) {
    header("Location: ../login.php");
    exit();
}
    

?>

<!DOCTYPE html>
    <head>
        <title>
            Consultation
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
                <a type="submit" class="log" href="../User/profile.php">Profile</a>
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
            <a href="consultation.php">Consultations</a>
            <a href="../services.php">Services</a>
            <a href="">Contact</a>
            <a href="">About</a>
        </div>
        <div class="docContent">
            <div class="serv">
                <div class="list">
                    <?php

                        $sql="SELECT * FROM `consultation`";
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                
                                $location=$row['location'];
                                $date=$row['date'];
                                
                                echo '<div class="container">
                                    <div class="bord">
                                    
                                    <ul class="responsive-table">
                                        <li class="table-row">
                                            <div class="col col-1" ><strong>Location</strong></div>
                                            <div class="col col-2" >'.$location.'</div>
                                        </li>
                                        <li class="table-row">
                                            <div class="col col-1" ><strong>Date</strong></div>
                                            <div class="col col-2" >'.$date.'</div>
                                            </a></div>
                                        </li>
                                    </ul>
                                    
                                    </div>
                                </div>';
                            }
                        }
                    ?>
                </div>
            </div>
            
        </div>
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
                        <li><a href="../Donation/schedule.php">Donations</a></li>
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
    </body>
</html>
