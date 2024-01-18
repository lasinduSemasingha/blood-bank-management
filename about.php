<?php include('./DB/config.php'); ?>
<?php
session_start();


if (isset($_SESSION['uId'])) {

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
    <head>
        <title>
            About
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
                <a type="submit" class="log" href="">Profile</a>
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
            <a href="">Contact</a>
            <a href="">About</a>
        </div>
        <div class="para">
            <p>
            <b>Welcome to Health First Blood Bank, where the power to save lives is at your fingertips. Our platform is designed with a singular purpose to seamlessly connect donors, recipients, and healthcare professionals in a unified effort to ensure a robust and efficient blood supply chain.</b><br />

            <br />

            <h3>1. User-Friendly Interface:</h3>
            Navigate our intuitive and user-friendly interface with ease. Whether you're a blood donor, recipient, or a healthcare professional, our website ensures a smooth and accessible experience for all.
            <br />
            <h3>2. Donor Registration and Profiles:</h3>
            Empower potential donors to register online, creating detailed profiles with information about their blood type, medical history, and donation preferences. This feature streamlines the donor management process and helps in maintaining an up-to-date database.
            <br />
            <h3>3. Real-Time Inventory Management:</h3>
            Stay informed about available blood supplies in real-time. Our advanced inventory management system ensures that healthcare facilities have accurate, up-to-the-minute information about blood types, quantities, and expiration dates.
            <br />
            <h3>4. Automated Appointment Scheduling:</h3>
            Donors can easily schedule appointments for blood donation through our automated system. This feature optimizes the donation process, reducing wait times and ensuring a steady and timely supply of blood.
            <br />
            <h3>5. Secure Data Storage:</h3>
            Security is our top priority. All personal and medical information is stored with the highest level of encryption and compliance with privacy regulations, ensuring confidentiality and trust.
            <br />
            <h3>6. Emergency Blood Requests:</h3>
            Enable healthcare professionals to make urgent blood requests. Our platform facilitates quick and targeted communication to potential donors, ensuring a rapid response in critical situations.
            <br />
            <h3>7. Notification System:</h3>
            Receive timely updates and alerts about upcoming appointments, critical blood shortages, and other important information through our notification system. Stay connected and informed at all times.
            <br />
            <h3>8. Analytics and Reporting:</h3>
            Gain insights into donation trends, inventory levels, and other relevant data through comprehensive analytics and reporting tools. This information empowers organizations to make informed decisions for better blood supply management.
            <br />
            <h3>9. Community Engagement:</h3>
            Foster a sense of community by enabling donors to share their experiences, testimonials, and success stories. Encourage a culture of regular blood donation through positive engagement.
            <br />
            <h3>10. Mobile Accessibility:</h3>
            Access our Blood Bank Management system on the go with our mobile-responsive design. Whether on a smartphone or tablet, the full functionality of our platform is available at your fingertips.
            <br />
            <h3>Join us in our mission to save lives through effective blood management. Together, we can make a difference.</h3>
            </p>
        </div>
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
