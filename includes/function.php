
<?php
include('../connections.php');
session_start();
$errors = array();




function checkUserFromDatabase($conn, $findUser)
{

    $email = $findUser;
    $sql = "SELECT * FROM users WHERE email='$email' limit 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        return $user;
    } else {
        return null;
    }
}



function checkPetFromDatabase($conn, $findPet)
{
    $findPet = $findPet;
    $sql = "SELECT * FROM pet WHERE id='$findPet'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        return $user;
    } else {
        return null;
    }
}

if (isset($_POST['createAccount'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $passwordA = $_POST['passwordA'];
    $passwordB = $_POST['passwordB'];


    if (empty($firstname) || empty($lastname) || empty($email) || empty($passwordA) || empty($passwordB)) {
        header("Location: ../signup.php?error=empty_fields");
        exit();
    }








    if ($passwordA === $passwordB) {
        $hashPassword = md5($passwordA);

        $sql = "SELECT * FROM users WHERE email='$email' limit 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);


        if ($user) {
            if ($user['password'] === $passwordA) {
                $_SESSION['user'] = $user['email'];
                echo '<script>alert("You already have an account and now proceeding to dashboard!");</script>';
                echo '<script>window.location.href = "../main-dashboard.php";</script>';
            } else {
                echo '<script>alert("You already have an account but entered a wrong password");</script>';
                echo '<script>window.location.href = "../login.php";</script>';
            }
        } else {
            $sql = "INSERT INTO users (firstname, lastname, email,password) 
            VALUES ('$firstname', '$lastname','$email','$passwordA')";
            mysqli_query($conn, $sql);
            $_SESSION['user'] = $email;

            echo '<script>alert("Successfully created an account");</script>';
            echo '<script>window.location.href = "../main-dashboard.php";</script>';
        }
    } else {
        header("Location: ../signup.php?error=password_mismatch");
        exit();
    }

















    // $firstname = mysqli_real_escape_string($conn, $firstname);
    // $lastname = mysqli_real_escape_string($conn, $lastname);
    // $email = mysqli_real_escape_string($conn, $email);
    // $sql = "INSERT INTO users (firstname, lastname, email,password) 
    // VALUES ('$firstname', '$lastname','$email','$passwordA')";
    // mysqli_query($conn, $sql);
    // $_SESSION['user'] = $email;






    // header('location: appoint.php');
}








if (isset($_POST['loginUser'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ../login.php?error=empty_fields");
        exit();
    } else {
        $data = checkUserFromDatabase($conn, $email);

        if ($data == null) {

            header("Location: ../login.php?error=email_missing");
        } else {
            if ($password === $data['password']) {
                $_SESSION['user'] = $email;
                echo '<script>alert("Login Successfully!");</script>';
                echo '<script>window.location.href = "../main-dashboard.php";</script>';
            } else {
                echo '<script>alert("The password you entered does not match our records.");</script>';
                echo '<script>window.location.href = "../login.php";</script>';
            }
        }
    }
}






if (isset($_POST['logout'])) {
    echo "Logout";    // unset($_SESSION['user']);
    // header("location:../index.php");
}









// if (isset($_POST['addPet'])) {
//     echo "Insert Successfully";
//     echo $petname = $_POST['addPet'];
//     echo$pet_dob = $_POST['pet_dob'];
//     echo$species = $_POST['species'];
//     echo$breed = $_POST['breed'];
//     $color = $_POST['color'];
//     $sex = $_POST['sex'];
//     $updatedVaccines = $_POST['updatedVaccines'];
//     $isMicrochipped = $_POST['isMicrochipped'];

//     $sql = "INSERT INTO `pets`(`petname`, `pet_dob`, `species`, `breed`, `color`, `sex`, `updatedVaccines`, `isMicrochipped`) 
//     VALUES ('$petname','$pet_dob','$species','$breed','$color','$sex','$updatedVaccines','$isMicrochipped')";
//     mysqli_query($conn, $sql);
// }
// ?>