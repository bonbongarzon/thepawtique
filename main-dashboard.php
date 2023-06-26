<?php

// include('connections.php');
// session_start();

// if (isset($_SESSION['user'])) {


//     $user = $_SESSION['user'];
// } else {
//     echo '<script>alert("Something went wrong! No account exists");</script>';
//     echo '<script>window.location.href = "index.php";</script>';
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../phpx/css/main-dash.css">
    <title>Main Dash</title>
</head>

<body>

<?php include("nav-dashboard.php") ?>


    <section class="sub-header">
        <div>
            <h1>My Dashboard</h1>
            <p>Manage everything you need here.</p>
        </div>

        <div class="inner-nav">
            <a href="#" class=" inner-nav ">Recent Activities</a>
            <a href="#" class=" inner-nav active">My Pets</a>
        </div>

    </section>
    <section class="myPets">
        <div>
            <a class="addPetBTN" href="addPet.php">Add New Pet</a>
        </div>
        <div class="petListView">




            <?php

            $sql = "SELECT * FROM pet WHERE ownerEmail = '$user' ORDER BY ID DESC; ";
            $result = mysqli_query($conn,$sql);

            if ($result->num_rows > 0) {
                // Output table header
            ?>
                <div class="pet-card">
                    <div class="table-head">
                        <p>Name</p>
                    </div>
                    <div class="table-head">
                        <p>Kind</p>
                    </div>
                    <div class="table-head">
                        <p>Breed</p>
                    </div>
                    <div class="table-head">
                        <p>Birthday</p>
                    </div>
                    <div class="table-head">
                        <p>Remarks</p>
                    </div>
                </div>
                <?php
                // Output table rows with pet data
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="pet-card">
                        <div>
                            <p class="name"><?php echo $row["petname"] ?></p>
                        </div>

                        <div>
                            <p class="table-content"><?php echo $row["species"] ?></p>
                        </div>
                        <div class="table-content">
                            <p><?php echo $row["breed"] ?></p>
                        </div>
                        <div class="table-content">
                            <p><?php
                                $dateString = $row["petDob"];
                                $timestamp = strtotime($dateString);
                                $formattedDate = date("F j, Y", $timestamp);
                                echo $formattedDate; ?></p>
                        </div>
                        <div class="table-content">
                            <p><?php echo $row["remarks"] ?></p>
                        </div>
                        <div class="actions">
                            <a class="" href="dashboard/editPet.php?pet_id=<?php echo $row['id']; ?>"> <img src="assets/material-symbols_edit.svg" alt="" srcset="">Edit</a>
                            <a href="dashboard/confirmDelete.php?pet_id=<?php echo $row['id']; ?>"><img src="assets/mingcute_delete-fill.svg" alt="" srcset="">Delete</a>
                        </div>
                    </div>
            <?php

                }
            } else {
                echo "No pets found.";
            }






            ?>
        </div>


    </section>
</body>

</html>