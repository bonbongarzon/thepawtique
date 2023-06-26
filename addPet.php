<?php

session_start();

if (isset($_SESSION['user'])) {


    $user = $_SESSION['user'];
} else {
    echo '<script>alert("Something went wrong! No account exists");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}

// include("../connections.php");
// include("../includes/function.php");
// $pet_id = $_REQUEST['pet_id'];

// $sql = "SELECT * FROM pets WHERE id='$pet_id'";
// $result = mysqli_query($conn,$sql);
// $pet = mysqli_fetch_assoc($result);

// $pet = checkPetFromDatabase($conn, $pet_id);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Dashboard</title>
    <link rel="stylesheet" href="css/main-dash.css">
    <link rel="stylesheet" href="css/editPet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="../script.js"></script>
</head>

<body>

    <?php
    include('nav-dashboard.php');
   
    ?>


    <section class="edit-petForm">


        <div>
            <div>
                <div>
                    <h1>Add Pet Information</h1>
                    <p>Now let's focus on the common details of your pet.</p>
                </div>
                <form action="../includes/insertPet.php" method="post">
                    <input type="text" name="email" value="<?php echo $user?>" hidden>    
                <div class="col">
                        <label for="">What is the name of your pet?</label>
                        <input name="petname" type="text" placeholder="Pet's Name">
                    </div>
                    <div class="row">
                        <label for="">When was your pet born?</label>
                        <input name="pet_dob" type="date">
                    </div>
                    <div class="col">
                        <label for="species">What species is your pet?</label>
                        <div class="row">
                            <div><input type="radio" name="species" id="" value="Dog"> <span>Canine (Dog)</span></div>
                            <div><input type="radio" name="species" id="" value="Cat"><span>Feline (Cat)</span></div>
                            <div><input type="radio" name="species" id="" value="Others"><span>Others(Bird/Rabbit...)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="">What's your pet's breed?</label>
                        <input name="breed" type="text" placeholder="Pet's Breed" >

                    </div>
                    <div class="col"><label for="">What's the dominant color of your pet?</label>
                        <input name="color" type="text" placeholder="Pet's Color">
                    </div>

                    <div class="col">
                        <div class="row">
                            <label for="">What is your pet's sex?</label>
                            <div> <input name="sex" type="radio" id="" value="Male"><span for="">Male</span></div>
                            <div><input type="radio" name="sex" id="" value="Female"><span for="">Female</span></div>
                        </div>
                    </div>


                    <hr>

                    <div class="col">
                        <label for="updatedVaccines">Is your pet currently up to date on vaccines?</label>
                        <div class="row">
                            <div><input type="radio" name="updatedVaccines" id="" value="Yes"> <label for="">Yes</label></div>
                            <div><input type="radio" name="updatedVaccines" id="" value="No"><label for="">No</label></div>
                            <div><input type="radio" name="updatedVaccines" id="" value="Unknown" ><label for="">Unknown</label></div>
                        </div>
                    </div>


                    <div class="col"><label for="isMicrochipped">Is your pet microchipped?</label>
                        <div class="row">
                            <div><input type="radio" name="isMicrochipped" id="" value="Yes"> <label for="">Yes</label></div>
                            <div><input type="radio" name="isMicrochipped" id="" value="No"><label for="">No</label></div>
                            <div><input type="radio" name="isMicrochipped" id="" value="Unknown"><label for="">Unknown</label></div>
                        </div>
                    </div>
                    <div class="col">
                        
                            <label for="remarks">Remarks</label>
                            <div class="text-area-container" style="width:100%">
                            <textarea class="textarea" style="width:100%; padding:20px" name="remarks" id="" cols="30" rows="5" placeholder="Loves to play on grass.."></textarea>
                            </div>
                        
                        
                    </div>
                    <div class="col"><button name="insertPet" class="addPet">Add Pet</button></div>
                </form>
            </div>
            <div>
                <div>
                    <h1>Why we need your pet information?</h1>
                    <p>We need your pet's information to provide the best care. This includes name, breed, age,
                        medical
                        history, and contact info.
                    </p>
                </div>

                <div>
                    <h1>How we use your pet information?</h1>
                    <p>We use your pet's information to:</p>
                    <ul>
                        <li> Create a medical record for your pet</li>
                        <li> Schedule appointments</li>
                        <li> Send reminders for upcoming appointments</li>
                        <li>Contact you in case of an emergency</li>
                        <li>Provide you with information about your pet's health</li>
                    </ul>
                </div>

                <div>
                    <h1>How you can protect your pet's information</h1>
                    <p>We take your pet's information very seriously and we take steps to protect it. We have
                        security
                        measures in place to prevent unauthorized access to your pet's information. You can also
                        help
                        protect your pet's information by creating a strong password for your account and not
                        sharing
                        your login information with anyone else.</p>
                </div>

                <span>Thank you for providing us with your pet's information. We appreciate your trust and we will
                    use
                    it to provide your pet with the best possible care.</span>
            </div>
        </div>
        </div>
    </section>
</body>

</html>