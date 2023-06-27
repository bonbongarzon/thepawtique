<?php

include('connections.php');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main-dash.css">
    <title></title>
</head>

<body>
    <header>
        <nav>
            <div>
                <div> <a class="logo-nav-dashboard" href="index.php">The Pawtique</a>
                    <a href="main-dashboard.php">My Pets</a>
                    <a href="">Account</a>
                </div>

                <form class="logout" action="logout.php" method="post">
                    <button name="logout" type="submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>
</body>

</html>