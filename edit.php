<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    require_once("dbinfo.php");
        $stuId = $_GET["stuid"];
        session_start();
        $mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $query = "SELECT firstname FROM students WHERE id = '$stuId'";
        $query2 = "SELECT lastname FROM students WHERE id = '$stuId'";
        $result = $mysqli->query($query);
        $result2 = $mysqli->query($query2);
      
            
        $firstName = mysqli_fetch_assoc($result)['firstname'];
        $lastName = mysqli_fetch_assoc($result2)['lastname'];
       
       
        
       $_SESSION["session-id"] = $_GET["id"];
       




    ?>
</head>
<body>
 
  
    <main>
    
        <form method="get" action="update-function.php">
            <fieldset>
                <legend>Add a record</legend>
                <label for="firstname-edit">First Name:</label>
                <input type="text" name="firstname-edit" id="firstname" value="<?php echo $firstName ?>"/>
                <label for="lastname-edit">Last Name:</label>
                <input type="text" name="lastname-edit" id="lastname" value="<?php echo $lastName ?>" />
                <label for="id-edit">Student Number:</label>
                <input type="text" name="id-edit" id="id" value="<?php echo $stuId ?>"/>
            </fieldset>
            <input type="submit" name="edit-submit" value="Submit"/><br />
        </form>
        

    </main>
</body>
</html>
