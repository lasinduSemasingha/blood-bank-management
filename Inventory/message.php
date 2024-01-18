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
            Messages
        </title>
        <link rel="icon" href="../resources/ico.png">
        <link rel="stylesheet" href="../CSS/style.scss">
    </head>
    <body>
        <div class="top">
            <a class="index" href="inventory.php">
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
            <a href="inventory.php">Dashboard</a>
        </div>
        <div class="docContent">
            <div class="serv">
                <div class="list">
                    <?php

                        $sql="SELECT * FROM `contact`";
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $id=$row['cId'];
                                $message=$row['message'];
                                $sMessage=$row['sMessage'];
                                echo '<div class="container">
                                    <div class="bord">
                                    <ul class="responsive-table">
                                        <li class="table-row">
                                            <div class="col col-1" ><strong>Main Message</strong></div>
                                            <div class="col col-2" >'.$message.'</div>
                                        </li>
                                        <li class="table-row">
                                            <div class="col col-1" ><strong>Sub Message</strong></div>
                                            <div class="col col-2" >'.$sMessage.'</div>
                                        </li>
                                        <a class="d-btn" href="deleteM.php?deleteid='.$id.'">Delete Message</a>
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
                        <li><a href="inventory.php">Dashboard</a></li>
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
