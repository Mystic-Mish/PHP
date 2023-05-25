<?php

include "config.php";

if (isset($_POST['submit'])) {

  $first_name = $_POST['firstname'];

  $last_name = $_POST['lastname'];

  $email = $_POST['email'];

  $gender = $_POST['gender'];

  $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `gender`) VALUES ('$first_name','$last_name','$email','$gender')";

  $result = $conn->query($sql);

  if ($result == TRUE) {

    echo "New record created successfully.";
  } else {

    echo "Error:" . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}

?>

<!DOCTYPE html>

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
  <form action="" method="POST">

    <h1>Registration</h1>


    First name:<br>

    <input type="text" name="firstname" required>

    <br>

    Last name:<br>

    <input type="text" name="lastname" required>

    <br>

    Email:<br>

    <input type="email" name="email" required>

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">
  </form>

</body>

</html>