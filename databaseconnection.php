<?php

require_once("dbinfo.php");

//echo  "<a href='adduser.php'>Add a Student</a>";
//use dbinfo content to attempt to connect to database

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
/*
instantiate a mysqli object
attempting to connect to db
*/
if( mysqli_connect_errno() != 0 ) {
    die("<p>Bad</p>");
} else {
    echo "<p>Good</p>";
}
/* determine if connection was successful */

?>