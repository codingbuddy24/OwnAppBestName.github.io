<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $Email = $_POST['UAEmail'];
    $Name = $_POST['UAName'];
    $Upswd = $_POST['UAUpaswd'];

    echo "$Email";
    echo "$Name";
    echo "$Upswd";

    if($Email && $Name && $Upswd){
        echo "<div class='alert alert-success' role='alert'>Data Recieved SuccessFully !</div>";
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>Data not Recieved !</div>";

    }

    

?>