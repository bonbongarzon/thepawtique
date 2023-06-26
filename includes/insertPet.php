<?php


include('../connections.php');




if (isset($_POST['insertPet'])) {

    $ownerEmail = $_POST['email'];
    $petname = $_POST['petname'];
    $petDob = $_POST['pet_dob'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $color = $_POST['color'];
    $sex = $_POST['sex'];
    $updatedVaccines = $_POST['updatedVaccines'];
    $isMicrochipped = $_POST['isMicrochipped'];
    $remarks = $_POST['remarks'];





    $insertPet = "INSERT INTO `pet`(`ownerEmail`, `petname`, `species`, `petDob`, `breed`, `color`, `sex`, `updatedVaccines`, `isMicrochipped`,`remarks`) 
    VALUES ('$ownerEmail','$petname','$species','$petDob','$breed','$color','$sex','$updatedVaccines','$isMicrochipped','$remarks')";

    mysqli_query($conn, $insertPet);
    echo '<script>alert("New Pet was added successfully");</script>';
    echo '<script>window.location.href = "../main-dashboard.php";</script>';
}



if (isset($_POST['updatePet'])) {
    $pet_id = $_POST['pet_id'];
    $petname = $_POST['petname'];
    $pet_dob = $_POST['pet_dob'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $color = $_POST['color'];
    $sex = $_POST['sex'];
    $updatedVaccines = $_POST['updatedVaccines'];
    $isMicrochipped = $_POST['isMicrochipped'];
    $remarks = $_POST['remarks'];



    $sql = "UPDATE pet SET petname = '$petname', petDob = '$pet_dob', species = '$species', breed = '$breed', color = '$color', sex = '$sex', updatedVaccines = '$updatedVaccines', isMicrochipped = '$isMicrochipped', remarks = '$remarks' WHERE id = $pet_id";
    mysqli_query($conn, $sql);
    header("Location:../dashboard/myPets.php");
}



if (isset($_POST['performDelete'])) {
    $pet_id = $_POST['pet_id'];

     $sql = "DELETE FROM `pet` WHERE id = '$pet_id'";
     mysqli_query($conn, $sql);

     echo '<script>alert("Delete Pet Successfully");</script>';
     $conn->close();
     echo '<script>window.location.href = "../main-dashboard.php";</script>';
 }


 if (isset($_POST['logout'])) {
    unset($_SESSION['user']);
    header("location:../index.php");
}


if (isset($_POST['anotherLogout'])) {
    unset($_SESSION['user']);
    header("location:../index.php");
}
