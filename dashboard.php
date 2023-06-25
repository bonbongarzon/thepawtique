<?php

session_start();

if (isset($_SESSION['user'])) {


    $user = $_SESSION['user'];
} else {
    echo '<script>alert("Something went wrong! No account exists");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pawtique</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="dashboard">
        <div class="sidenav">

            <a href="">The Pawtique</a>
            <a href="">Dashboard</a>
            <a href="">Account</a>
            <a href="">Pets</a>
            <form action="includes/function.php" method="post">
                <button name="logout">Logout</button>
            </form>

            <h1>Welcome <?php echo $user ?></h1>
        </div>
        <div class="main-container">
            <iframe src="dashboard/petsDashboard.php" frameborder="0" scrolling="yes"></iframe>
        </div>
    </div>
    <!-- <footer>
    <div>
        <div>
            <h1>About Us</h1>
            <p>At The Pawtique, where we are passionate about providing top-notch care for your beloved pets. Our
                dedicated team of veterinarians, groomers, and staff is committed to delivering exceptional service and
                ensuring the health, happiness, and style of your furry companions. With a focus on compassion,
                expertise, and a holistic approach to pet care, we strive to create a warm and welcoming environment
                where your pets receive the best possible attention and treatment. At The Pawtique, your pet's
                well-being is our utmost priority, and we are here to be your trusted partner in their lifelong journey
                of health and happiness.</p>
        </div>
        <div>
            <h1>Quick Links</h1>
            <a href="">About Us</a>
            <a href="">Our Clinic</a>
            <a href="">Services</a>
            <a href="">Contact Us</a>
        </div>
        <div>
            <h1>Follow Us</h1>
            <a href="">
                <i class="fa-brands fa-facebook"></i>
                The Pawtique
            </a>
            <a href="">
                <i class="fa-brands fa-instagram"></i>
                @thepawtique
            </a>

        </div>
    </div>
    <div>Copyright © 2023 The Pawtique. All rights reserved.</div>
</footer> -->

</html>