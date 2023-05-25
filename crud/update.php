<?php

include "config.php";

if (isset($_POST['update'])) {

    $firstname = $_POST['firstname'];

    $user_id = $_POST['user_id'];

    $lastname = $_POST['lastname'];

    $email = $_POST['email'];

    $gender = $_POST['gender'];

    $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`gender`='$gender' WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record updated successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];

            $gender = $row['gender'];

            $id = $row['id'];
        }

?>

        <html>

        <head>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    margin: auto;
                    height: 100vh;
                    background-color: lightgray;
                }

                input[type=submit] {
                    background-color: darkgray;
                    padding: 5px;
                    border-radius: 5px;
                    cursor: pointer;
                }

                input[type=text],
                input[type=email] {
                    width: 200px;
                    height: 20px;
                    border-radius: 5px;
                }

                form {
                    background-color: darkolivegreen;
                    border-radius: 20px;
                    padding: 10px;
                }
            </style>
        </head>

        <body>

            <form action="" method="post">

                <h2>User Update Form</h2>


                First name:<br>

                <input type="text" name="firstname" value="<?php echo $first_name; ?>">

                <input type="hidden" name="user_id" value="<?php echo $id; ?>">

                <br>

                Last name:<br>

                <input type="text" name="lastname" value="<?php echo $lastname; ?>">

                <br>

                Email:<br>

                <input type="email" name="email" value="<?php echo $email; ?>">

                <br>

                Gender:<br>

                <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                                                                    echo "checked";
                                                                } ?>>Male

                <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                                                                        echo "checked";
                                                                    } ?>>Female

                <br><br>

                <input type="submit" value="Update" name="update">

            </form>

        </body>

        </html>

<?php

    } else {

        header('Location: view.php');
    }
}

?>