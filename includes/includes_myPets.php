<?php

include('../connections.php');
// if (isset($_POST['addNewPet'])) {
//     $user = $_POST['email'];
//     $petname = $_POST['petname'];
//     $pet_dob = $_POST['pet_dob'];
//     $species = $_POST['species'];
//     $breed = $_POST['breed'];
//     $color = $_POST['color'];
//     $sex = $_POST['sex'];
//     $updatedVaccines = $_POST['updatedVaccines'];
//     $isMicrochipped = $_POST['isMicrochipped'];

//     $sql = "INSERT INTO  sample ( `name`, `email`, `date`) VALUES ('Sample','Sample','Sample')";
//     mysqli_query($conn, $sql);
//     echo '<script>alert("New Pet was added successfully");</script>';
//     echo '<script>window.location.href = "../main-dashboard.php";</script>';
// }


// if (isset($_POST['updatePet'])) {
//     $pet_id = $_POST['pet_id'];
//     $petname = $_POST['petname'];
//     $pet_dob = $_POST['pet_dob'];
//     $species = $_POST['species'];
//     $breed = $_POST['breed'];
//     $color = $_POST['color'];
//     $sex = $_POST['sex'];
//     $updatedVaccines = $_POST['updatedVaccines'];
//     $isMicrochipped = $_POST['isMicrochipped'];



//     $sql = "UPDATE pets SET petname = '$petname', pet_dob = '$pet_dob', species = '$species', breed = '$breed', color = '$color', sex = '$sex', updatedVaccines = '$updatedVaccines', isMicrochipped = '$isMicrochipped' WHERE id = $pet_id";
//     mysqli_query($conn, $sql);
//     $conn->close();
//     header("Location:../dashboard/myPets.php");
// }



// if (isset($_POST['performDelete'])) {
//     $pet_id = $_POST['pet_id'];

//     $sql = "DELETE FROM `pets` WHERE id = '$pet_id'";
//     mysqli_query($conn, $sql);

//     echo '<script>alert("Delete Pet Successfully");</script>';
//     $conn->close();
//     echo '<script>window.location.href = "../main-dashboard.php";</script>';
// }
