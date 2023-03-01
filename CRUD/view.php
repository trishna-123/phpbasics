<?php
    include "config.php";

    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);
?>

<!doctype html>
<html>
    <head>
        <title>View Page</title>
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h2>users</h2>
            <table class="table">
                <head>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Action</th>
                    </tr>
                </head>
                <tbody>
                    <?php 
                        if($result->num_rows>0) {
                            while($row = $result->fetch_assoc()) {

                    ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">
                            Edit</a>&nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>"></td>
                            Delete</a></td>    
                        </tr>

                        <?php  
                    }
                        
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>