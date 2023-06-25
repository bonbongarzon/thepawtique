<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Dashboard</title>
    <link rel="stylesheet" href="../css/petDashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="../js/script.js"></script>
</head>

<body>
    <!-- <section class="dashboard-header">
        <div>
            <h1>Manage Pet's Here</h1>
            <p>Good Day, Random. Here, you can easily access and update details about your pets, ensuring their
                well-being and
                keeping their medical records</p>
        </div>
    </section>
    <section class="pet-form-main">
        <div>
            <form action="" method="post">
                <div>
                    <h1>Now let's focus on the common details of your pet. </h1>
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
                            <div><input type="radio" name="species" id=""> <span for="">Canine(Dogs)</span></div>
                            <div><input type="radio" name="species" id=""><span for="">Feline(Cats)</span></div>
                            <div><span>Others:</span>
                                <input name="species" type="text" id="otherSpeciesInput" placeholder="Others">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="">What's your pet's breed?</label>
                        <input name="breed" type="text" placeholder="Pet's Breed">

                    </div>
                    <div class="col"><label for="">What's the dominant color of your pet?</label>
                        <input name="color" type="text" placeholder="Pet's Color">
                    </div>

                    <div class="col">
                        <div class="row">
                            <label for="">What is your pet's sex?</label>
                            <div> <input name="sex" type="radio" name="" id=""><span for="">Male</span></div>
                            <div><input type="radio" name="" id=""><span for="">Female</span></div>
                        </div>
                    </div>


                    <hr>

                    <div class="col">
                        <label for="updatedVaccines">Is your pet currently up to date on vaccines?</label>
                        <div class="row">
                            <div><input type="radio" name="updatedVaccines" id=""> <label for="">Yes</label></div>
                            <div><input type="radio" name="updatedVaccines" id=""><label for="">No</label></div>
                            <div><input type="radio" name="updatedVaccines" id=""><label for="">Unknown</label></div>
                        </div>
                    </div>


                    <div class="col"><label for="isMicrochipped">Is your pet microchipped?</label>
                        <div class="row">
                            <div><input type="radio" name="isMicrochipped" id=""> <label for="">Yes</label></div>
                            <div><input type="radio" name="isMicrochipped" id=""><label for="">No</label></div>
                            <div><input type="radio" name="isMicrochipped" id=""><label for="">Unknown</label></div>


                        </div>
                    </div>
                    <div class="col"><button name="addPet">Add My Pet</button></div>

                </div>

                <div class="pet-info-reminder">
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
            </form>
        </div>
    </section> -->
    <!-- <div id="add-pet-section" class="add-pet-section">
        <h2>Add Pet</h2>
        <button id="add-pet-button">Proceed</button>

    </div>
    <div id="pet-form-section" class="pet-form-section" style="display: none;">
        <h2>Pet Information</h2>


        <form id="pet-form" action="../includes/function.php" method="post">
            <label for="">Pet Name</label>
            <input name="petname" type="text">

            <label for="">Date of Birth</label>
            <input name="pet_dob" type="date">
            <label for="species">Species</label>
            <div>
                <input type="radio" name="species" id=""> <span for="">Canine(Dogs)</span>
                <input type="radio" name="species" id=""><span for="">Feline(Cats)</span>

                <input name="species" type="text" id="otherSpeciesInput" placeholder="Others"></div>


            <label for="">Breed</label>
            <input name="breed" type="text">
            <label for="">Color</label>
            <input name="color" type="text">
            <label for="">Sex</label>
            <input name="sex" type="radio" name="" id=""><span for="">Male</span>
            <input type="radio" name="" id=""><span for="">Female</span>
            <label for="updatedVaccines">Is your pet currently up to date on vaccines?</label>
            <input type="radio" name="updatedVaccines" id=""> <label for="">Yes</label>
            <input type="radio" name="updatedVaccines" id=""><label for="">No</label>
            <input type="radio" name="updatedVaccines" id=""><label for="">Unknown</label>
            <label for="isMicrochipped">Is your pet microchipped?</label>
            <input type="radio" name="isMicrochipped" id=""> <label for="">Yes</label>
            <input type="radio" name="isMicrochipped" id=""><label for="">No</label>
            <input type="radio" name="isMicrochipped" id=""><label for="">Unknown</label>
            <button name="addPet">Add My Pet</button>
        </form>
    </div>

    <form action="../includes/includes_myPets.php" method="post">
        <input type="text" name="petname" id="">
        <button type="submit" name="addPet"> Add Pet</button>
    </form> -->
</body>

</html>