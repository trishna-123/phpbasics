<?php
    include "config.php";

    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    }

    $sql = "INSERT INTO 'users' ('name', 'email', 'password') VALUES ('$name', '$email', '$password')";

    $result = $conn->query($sql);

    if($result == TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error:" .$sql . "<br>". $conn->error;
    }

    $conn->close();
?>

<!DOCTYPE html>
<htm>
    <body>
        <h2>Signup Form</h2>

        <form action="" method="POST">
            <fieldset>
                <legend>Personal Information:</legend>
                Name : <br>
                <input type="text" name="name">
                <br>
                E-mail : <br>
                <input type="text" name="email">
                <br>
                Password : <br>
                <input type="password" name="password">
                <br>
                <input type="submit" name="submit" value="Done">
            </fieldset>
        </form>
    </body>
</htm>