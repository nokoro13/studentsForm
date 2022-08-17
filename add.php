<?php 
    session_start();
    include('dbtabledata.php');
    $firstname				= "";
    $lastname				= "";
    $studentnumber		= "";

    if(	!isset($_POST['firstname']) || !isset($_POST['lastname']) || !isset($_POST['id'])){
		$_SESSION['errorMessages'] = "<p class='error'>Please register, its real easy to do...</p>";
        header("Location: dbtabledata.php");
        die();
    }

    /* store form field data in varaibles*/
    $firstname				= trim($_POST['firstname']);
    $lastname				= trim($_POST['lastname']);
    $studentnumber		= trim($_POST['id']);

    

    require_once('databaseconnection.php');

    $firstname = $db->real_escape_string($firstname);
    $lastname = $db->real_escape_string($lastname);
    $studentnumber = $db->real_escape_string($studentnumber);

    $query2 = "INSERT INTO students (firstname, lastname, id) VALUES ('$firstname','$lastname', '$studentnumber');";
    $result2 = $db->query( $query2);
    //ensure our attempt to insert was a success
    if( $db->affected_rows == 0){
        die();
    } else {
       echo  "<h2>Record added to datebase</h2>";
       echo  "<p>First Name: ".$firstname."</p>";
       echo  "<p>Last Name: ".$lastname."</p>";
       echo  "<p>Student Number: ".$studentnumber."</p>";
    }
    /* close MySQL connection */
    $db->close();

?>


