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
            $_SESSION['deleteid'] = $_GET["id"];
        ?>
        <main>
            <form method="POST" action="deletescript.php">
                <fieldset>
                    <legend>Delete a record - are you sure?</legend>
                    <input type="radio" name="radio" value="yesdlt">Yes</input>
                    <input type="radio" name="radio" value="nodlt">No</input>
                </fieldset>
                <input type="submit" name="delete" value="Delete Record"/><br />    
            </form>
        </main>
    </body>
</html>