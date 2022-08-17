<?php   
    session_start();
    include('databaseconnection.php');
    $radioPicked = $_POST['radio'];
    
    if ($radioPicked == 'yesdlt'){
        include('dbtabledata.php');
        echo "<p>Record has been deleted from the database</p>";
        include('databaseconnection.php');
        $idDelete = $_SESSION['deleteid'];

        $query4n=mysqli_query($db, "SELECT * FROM `students` WHERE primary_key='$idDelete'") ;
        while($rowResult=mysqli_fetch_array($query4n)) {
            echo "<p>".$rowResult['firstname']."</p>";
            echo "<p>".$rowResult['lastname']."</p>";
            echo "<p>".$rowResult['id']."</p>";
        }

        $query3n = "DELETE FROM `students`WHERE primary_key='$idDelete';";
        $result3n = $db->query( $query3n);
    } else {
        include('dbtabledata.php');
    }
?>