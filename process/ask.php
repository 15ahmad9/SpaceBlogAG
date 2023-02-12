<?php
// Connect to database
include("../config/db_config.php");

if (!empty($_GET)) {
    $error = "";
    if (empty($_GET['Name']) || empty($_GET['Question'])) {
        // $error.= "Name and phoneNumber and Question cannot be empty";
        header("location:../index.php?key_error=Name and Question cannot be empty");
    } else {
        $Name = $_GET['Name'];
        $Question = $_GET['Question'];

        $ask_query = "INSERT INTO question (Name, Question) VALUES('$Name', '$Question')";
        if (mysqli_query($connection, $ask_query)) {
            header("location:../index.php?message=sucessfully");
        } else {
            echo "Error" . $ask_query . mysqli_error($connection);
        }
    }

}


?>