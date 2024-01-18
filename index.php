<?php include('./DB/config.php'); ?>
<?php
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

if (!$isLoggedIn && isset($_POST['register'])) {
    header("Location: register.php");
    exit();
}

if ($isLoggedIn && isset($_POST['logout'])) {
    unset($_SESSION['user_id']);
    header("Location: index.php");
    exit();
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
        <link rel="icon" href="./resources/ico.png">
        <link rel="stylesheet" href="./CSS/style.scss">
    </head>
    <body>
        <div class="top">
            <a class="index" href="./index.php">
                <img src="./resources/ico.png" alt="RubyCare">
                <h1 class="tracking-in-expand">Health First</h1>
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
            <a href="services.php">Services</a>
            <a href="./Donation/schedule.php">Donations</a>
            <a href="contactus.php">Contact</a>
            <a href="about.php">About</a>
            <form action="search.php" method="get">
                <button type="text" id="search" name="search">Search</button>
                <input type="text" id="search" placeholder="Search Services" name="search">
            </form>
        </div>
        <div id="slideshow">
            <img class="active" src="./resources/slide1.jpg" alt="Blood Donation Image 1">
            <img src="./resources/slide2.jpeg" alt="Blood Donation Image 2">
            <img src="./resources/slide3.png" alt="Blood Donation Image 3">
            <img src="./resources/slide4.jpg" alt="Blood Donation Image 4">
            <div class="centered">
                <h1>Donate Now!</h1>
            </div>
        </div>
        <div class="indicators" id="indicators"></div>
        <div class="content">
            <h2>Welcome to <strong>Health First</strong> Online Blood Bank</h2>
            <p>Help us save lives by donating blood. Your contribution can make a difference.</p>
        </div>
        <div class="cards">
            <div class="doctor">
                <h3><strong>Experiened Doctors</strong></h3>
                <p>Our committed team of professional doctors ensures a safe and smooth donation process. Trust in the expertise of our medical professionals as we work together to make a positive impact on lives through blood donation. Welcome to a community driven by care and expertise!</p>
                <div class="btn">
                    <button onClick="window.location.href=''">Doctors</button>
                </div>
            </div>
            <div class="hospital">
                <h3><strong>Hospitals</strong></h3>
                <p>We collaborate with top hospitals, we link donors with critical blood needs. Join us in the mission to save lives. Welcome to a community making a difference in healthcare!</p>
                <div class="btn">
                    <button onClick="window.location.href='./Hospitals/hospitals.php'">Hospitals</button>
                </div>
            </div>
            <div class="donation">
                <h3><strong>Donations</strong></h3>
                <p>Easily register as a blood donor, explore real-time updates on blood availability, and join our community in making a significant impact. Your contribution matters, join us in building a healthier and stronger community through the simplicity of our platform.</p>
                <div class="btn">
                    <button onClick="window.location.href=''">Donations</button>
                </div>
            </div>
            <div class="info">
                <h3><strong>Our Service</strong></h3>
                <p>your dedicated platform for streamlined blood services. We offer easy donor registration, real-time updates on blood availability, and a user-friendly experience. Join us in our mission to save lives through efficient blood management. Your contribution matters!</p>
                <div class="btn">
                    <button>Services</button>
                </div>
            </div>
        </div>
        <div class="partner">
            <img src="./resources/feedback.jpg" alt="feedback">
            <div class="box">
                <h2>We value your Feedback</h2>
                <button onClick="window.location.href='./Feedback/feedback.php'">Put your Feedback Here!</button>
            </div>
        </div>
        <div class="flip">
            <h1>Our Programs</h1>
            <div class="flip-in">
                
                <div class="card1">
                    <h3>No Cost</h3>
                    <p>"Discover 'No Cost,' our blood bank's program that puts altruism first. With a commitment to saving lives without any financial burden on donors, this initiative ensures a readily available and donation-free blood supply. 'No Cost' encourages selfless acts of giving, making a significant impact on community health."</p>
                </div>
                <div class="card1">
                    <h3>Red Ribbon Rally</h3>
                    <p>Red Ribbon Rally is your invitation to a community-driven blood donation effort. Inspired by the red ribbon, our campaign celebrates the simple yet powerful act of giving life. Wear the ribbon, donate blood, and join us in creating a network of lifesavers. It's not just a campaign; it's a collective commitment to kindness and making a real impact. Your small gesture can be the lifeline someone desperately needs. Join the Red Ribbon Rally – where every drop counts!</p>
                </div>
                <div class="card1">
                    <h3>Hope for Thalassemia</h3>
                    <p>A support program offering vital resources and compassion for those impacted by Thalassemia. We aim to provide assistance, raise awareness, and foster a community of strength, bringing hope to every individual affected by this condition</p>
                </div>
                <div class="card1">
                    <h3>VitalFlow Project</h3>
                    <p>Be a Platelet Hero! Join us in regular donation drives to make a big impact with a small act. Your platelet donation is a lifeline for those in need, especially cancer patients. Let's ensure a stable supply and spread the vital flow of compassion.</p>
                </div>
            </div>
        </div>
        <footer class="foot">
            <div class="category">
                <div class="link">
                    <ul style="list-style-type:none;">
                    <h4>Quick Links</h4>
                        <li><a href="">Laboratories</a></li>
                        <li><a href="./Hospitals/hospitals.php">Hospitals</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="highlights">
                    <ul style="list-style-type:none;">
                        <h4>Highlights</h4>
                        <li><a href="./Donation/schedule.php">Donation</a></li>
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
        <script src="./JS/script.js"></script>
    </body>
</html>
