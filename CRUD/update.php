<?php
    include "config.php";

    if(isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE 'users' SET 'name' = '$name', 'email' = '$email', 'password' = '$password'";
    ;
        $result = $conn->query($sql);

        if($result==TRUE) {
            echo "Record updated successfully";
        }
        else {
            echo "Error:". $sql . "<br>" . $conn->error;
        }
    }

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $sql = "SELECT * FROM 'users' WHERE 'id' = '$user_id'";

        $result = $conn->query($sql);

        if($result->num_rows >0) {
            while($row = $result->fetch_assoc()) {
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
            } 
            ?>
        }
    }
    

<!DOCTYPE HTML>
<html>
    <body>
    <h2>User Update Form </h2>
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
</html>

<?php
} else {
    //if the 'id' value is not valid, redirect the user back to view.php page
    header('Location: view.php');
}
}
?>

