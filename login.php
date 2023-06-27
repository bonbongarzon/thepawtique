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
    <section class="cta login">
        <div>
            <div>
                <div class="cta-photo"><img src="assets/cta-photo.png" alt=""></div>
                <div>
                    <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>

                    <h1>Login an Account</h1>
                    <p>Book an appointment today and give your pet the exceptional care they deserve at The Pawtique.
                        Experience the perfect blend of veterinary expertise, luxurious grooming, and a stress-free
                        environment.</p>

                    <?php

                    if (isset($_GET['error'])) {
                        if ($_GET["error"] == "empty_fields") {

                            echo '<p class="error">Please fill in all fields.</p>';
                        };

                        if ($_GET["error"] == "email_missing") {

                            echo '<p class="error">The email address you entered is missing. Proceed to sign-up!</p>';
                        };
                    }

                    ?>

                    <form action="includes/function.php" method="post">
                        <input type="email" name="email" id="" placeholder="Email">
                        <input type="password" name="password" id="" placeholder="Password">
                        <a href="signup.php">Forgot Password?</a>
                        <button name="loginUser">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('footer.php')
    ?>
</body>

</html>