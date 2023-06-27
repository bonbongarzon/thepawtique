<?php
include("connections.php");
include("includes/function.php");
$pet_id = $_REQUEST['pet_id'];

// $sql = "SELECT * FROM pets WHERE id='$pet_id'";
// $result = mysqli_query($conn,$sql);
// $pet = mysqli_fetch_assoc($result);

$pet = checkPetFromDatabase($conn, $pet_id);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Dashboard</title>
    <link rel="stylesheet" href="css/main-dash.css">
    <link rel="stylesheet" href="css/confirmDelete.css">
    <link rel="stylesheet" href="css/editPet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="../script.js"></script>
</head>

<body>

    <?php
    include_once('nav-dashboard.php');
    ?>


    <section class="delete-petForm">
        <div class="col">
            <img src="assets/favorite pet.svg" alt="">
            <h1>Are you sure you want to delete <?php echo $pet['petname'] ?>'s information?</h1>
            <p>If you have any concerns or questions, we're here to assist you and explore alternative options that might better suit your needs.</p>
            <div class="row"><a href="main-dashboard.php">No, Back to Dashboard</a>
                <form action="../includes/insertPet.php" method="post">
                <input type="text" name="pet_id" value="<?php echo$pet_id?>" hidden>    
                <button class="deleteBTN" name="performDelete">Confirm Delete</button></form>
            </div>

        </div>
    </section>
</body>

</html>