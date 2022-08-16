<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="blue.css">   
</head>
<body>
    <div>
        <form method="POST" action="add.php">
                <fieldset>
                    <legend>Add a record</legend>
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" />
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" />
                    <label for="id">Student Number:</label>
                    <input type="text" name="id" id="id" />
                </fieldset>
                <input type="submit" name="add" value="Submit"/><br />
        </form>
    </div>


        <table>
    <?php
        
        include('databaseconnection.php');
        $query=mysqli_query($db, "SELECT * FROM `students`");
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Student ID</th>";
        echo "<th>Actions</th>";
        while($row=mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['id']; ?></td>
                <td>
                    <?php 
                    $stuId = $row['id']; 
                    $dltStudent = $row['id'];
                    ?>
                    <a href="edit.php?id=<?php echo $row['firstname'], $row['lastname'], $row['id'];?>&stuid=<?php echo $stuId; ?>" class='edit'>Edit</a>
                    <a href="delete.php?id=<?php echo $row['firstname'], $row['lastname'], $row['id'];?>&dltstudent=<?php echo $dltStudent; ?>" class='delete'>Delete</a>
                </td>
            </tr>
            <?php
        }
    ?>
    </table>


</body>
</html>