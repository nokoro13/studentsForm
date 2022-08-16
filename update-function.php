<?php
session_start();
require_once("databaseconnection.php");
        if(isset($_GET["firstname-edit"]) && isset($_GET["lastname-edit"]) && isset($_GET["id-edit"])) {
            $newName = trim($_GET["firstname-edit"]);
            $newLastName = trim($_GET["lastname-edit"]);
            $newId = trim($_GET["id-edit"]);
            if ($newName === "" || $newLastName === "" || $newId ==="") {
                header("location: edit.php");
            }
                $where = $_SESSION["session-id"];
                $query3 = "UPDATE students SET firstname='$newName', lastname='$newLastName', id='$newId' WHERE primary_key ='$where'";
                $result3 = $db->query($query3);
            
                header("location: dbtabledata.php");
        }else {
            header("location: edit.php");
        }


        

        ?>