<?php
$fileLevel = "../";
$title = "Colour App | Deej Potter Designs";
$description = "An online app to share your favourite colour with other people and see who has the same favourite.";
$link = "https://deejpotterdesigns.com/work/colourApp.php";
$image = "https://deejpotterdesigns.com/images/logo.png";
include $fileLevel."templates/header.php"
?>

<main>

    <!-- Hero section -->
    <section id="hero-section">
        <div class="jumbotron jumbotron-fluid bg-primary">
            <div class="container text-center">
                <h1 class="display-3">Favourite colour checker</h1>
                <hr>
                <p>Enter the name of a colour below to find other people who like the same one. If it doesn't work, it's probably because no one has entered that colour yet. You can enter it yourself below and leave your mark on the world.</p>
                <!-- Input favourite colour name and return a list of data entries that match the colour -->
                <form class="form-inline" action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
                    <div class="form-group w-100 justify-content-center">
                        <input type="text" name="readFavouriteColour" id="readFavouriteColour" class="form-control w-50" placeholder="Enter colour name...">
                        <input class="btn btn-secondary" type="submit" name="readSubmit" value="Find colour">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Read section -->
    <section id="read-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2>Results</h2>
                    <?php
                    if (isset($_POST['readSubmit'])) {
                        try {
                            require $fileLevel."config.php";
                            require $fileLevel."common.php";

                            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $sql = "SELECT *
                                FROM $tableName
                                WHERE favouriteColour = :favouriteColour";

                            $favouriteColour = $_POST['readFavouriteColour'];

                            $statement = $conn->prepare($sql);
                            $statement->bindParam(':favouriteColour', $favouriteColour, PDO::PARAM_STR);
                            $statement->execute();

                            $result = $statement->fetchAll();
                        } catch (PDOException $error) {
                            echo $sql . "<br>" . $error->getMessage();
                        }
                        if ($result && $statement->rowCount() > 0) { ?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Favourite Colour</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Input new row for each row found in database -->
                                    <?php foreach ($result as $row) { ?>
                                        <tr>
                                            <td scope="row"><?php echo escape($row["id"]); ?></td>
                                            <td><?php echo escape($row["username"]); ?></td>
                                            <td><?php echo escape($row["firstname"]); ?></td>
                                            <td><?php echo escape($row["lastname"]); ?></td>
                                            <td><?php echo escape($row["favouriteColour"]); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <p>No results found</p>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Create section -->
    <section id="create-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2>Create</h2>
                    <p>Enter your info to create a new user. All fields are required. All of the information will be stored in a database only accessable by me and will not be used for any reason other than showing your favourite colour.</p>
                </div>
                <div class="col-md">
                    <!-- Form should submit the details and create a new user in the database -->
                    <form class="" action="<?php echo $fileLevel ?>createUser.php" method="post">
                        <div class="form-group">
                            <label id="createUsernameLabel" for="createUsername">Username:</label>
                            <input type="text" name="createUsername" id="createUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="createUsernameLabel">
                        </div>
                        <div class="form-group">
                            <label id="createFirstNameLabel" for="createFirstName">First Name:</label>
                            <input type="text" name="createFirstName" id="createFirstName" class="form-control" placeholder="Sterog" aria-labelledby="createFirstNameLabel">
                        </div>
                        <div class="form-group">
                            <label id="createLastNameLabel" for="createLastName">Last Name:</label>
                            <input type="text" name="createLastName" id="createLastName" class="form-control" placeholder="Smithson" aria-labelledby="createLastNameLabel">
                        </div>
                        <div class="form-group">
                            <label id="createFavouriteColourLabel" for="createFavouriteColour">Favourite Colour:</label>
                            <input type="text" name="createFavouriteColour" id="createFavouriteColour" class="form-control" placeholder="Blue" aria-labelledby="createFavouriteColourLabel">
                        </div>
                        <div class="form-group">
                            <label id="createPasswordLabel" for="createPassword">Password:</label>
                            <input type="password" name="createPassword" id="createPassword" class="form-control" placeholder="x6h27YT5&" aria-labelledby="createPasswordLabel">
                        </div>
                        <input class="btn btn-primary" type="submit" name="createSubmit" value="Create user">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Update section -->
    <section id="update-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Update</h2>
                    <p>Fill in all of the fields here to update your information. Please fill in all of the fields, any empty parts will replace that field with a blank space.</p>
                </div>
                <div class="col-md-6">
                    <form class="" action="<?php echo $fileLevel ?>updateUser.php" method="post">
                        <!-- Form should find row with the username and check the password then update all fields -->
                        <div class="form-group">
                            <label id="updateUsernameLabel" for="updateUsername">New Username:</label>
                            <input type="text" name="updateUsername" id="updateUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="updateUsernameLabel">
                        </div>
                        <div class="form-group">
                            <label id="updateFirstNameLabel" for="updateFirstName">New First Name:</label>
                            <input type="text" name="updateFirstName" id="updateFirstName" class="form-control" placeholder="Sterog" aria-labelledby="updateFirstNameLabel">
                        </div>
                        <div class="form-group">
                            <label id="updateLastNameLabel" for="updateLastName">New Last Name:</label>
                            <input type="text" name="updateLastName" id="updateLastName" class="form-control" placeholder="Smithson" aria-labelledby="updateLastNameLabel">
                        </div>
                        <div class="form-group">
                            <label id="updateFavouriteColourLabel" for="updateFavouriteColour">New Favourite Colour:</label>
                            <input type="text" name="updateFavouriteColour" id="updateFavouriteColour" class="form-control" placeholder="Blue" aria-labelledby="updateFavouriteColourLabel">
                        </div>
                        <div class="form-group">
                            <label id="updatePasswordLabel" for="updatePassword">New Password:</label>
                            <input type="password" name="updatePassword" id="updatePassword" class="form-control" placeholder="x6h27YT5&" aria-labelledby="updatePasswordLabel">
                        </div>
                        <input class="btn btn-primary" type="submit" name="updateSubmit" value="Update user">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Delete section -->
    <section id="delete-section" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2>Delete user</h2>
                    <p>Enter your username and password to delete your entry from the database. This is permenent.</p>
                </div>
                <div class="col-md">
                    <form action="<?php echo $fileLevel ?>deleteUser.php" method="post">
                        <!-- Form should find row with the username and check the password then delete all fields -->
                        <div class="form-group">
                            <label id="deleteUsernameLabel" for="deleteUsername">Username:</label>
                            <input type="text" name="deleteUsername" id="deleteUsername" class="form-control" placeholder="Sterogrules" aria-labelledby="deleteUsernameLabel">
                        </div>
                        <div class="form-group">
                            <label id="deletePasswordLabel" for="deletePassword">Password:</label>
                            <input type="password" name="deletePassword" id="deletePassword" class="form-control" placeholder="x6h27YT5&" aria-labelledby="deletePasswordLabel">
                        </div>
                        <input class="btn btn-primary" type="submit" name="deleteSubmit" value="Delete user">
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include $fileLevel."templates/footer.php"; ?>