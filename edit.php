<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="blue.css">
        <?php
            session_start();
        ?>
    </head>
    <body>
        <?php 
        echo "<p>".$_GET["id"]."</p>";
        ?>
        <main>
            <form method="POST" action="add.php">
                <fieldset>
                    <legend>Add a record</legend>
                    <label for="firstname-edit">First Name:</label>
                    <input type="text" name="firstname" id="firstname" />
                    <label for="lastname-edit">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" />
                    <label for="id-edit">Student Number:</label>
                    <input type="text" name="id" id="id" />
                </fieldset>
                    <input type="submit" name="add" value="Submit"/><br />
            </form>
        </main>
    </body>
</html>