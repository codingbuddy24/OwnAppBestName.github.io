<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $Email = $_POST['MEmail'];
    $FulName = $_POST['MFullName'];
    $Msg = $_POST['MMessage'];

    // Database Variables 
    $servername = "localhost";
    $username = "admin";
    $pswd = "UpMA@1222";
    $db = "AssignmentBest";

    if($Email && $FulName && $Msg){
        $conn = new mysqli($servername,$username,$pswd,$db);
        if($conn->connect_error){
            die("<div class='alert alert-Danger' role='alert'>Connection Failed ! $conn->connect_error</div>");
        }
        else{
            $mydate=getdate(date("U"));
            $month = ($mydate["mon"]<10 ? "0".$mydate["mon"] : $mydate["mon"]);
            $day = ($mydate["mday"]<10 ? "0".$mydate["mday"] : $mydate["mday"]);
            $DateSave = "$mydate[year]-$month-$day";
            $InsertQury = "INSERT into ContactUs(Email, FullName, Message, Date_Time) values ('$Email','$FulName','$Msg','$DateSave')";
            // "INSERT into ContactUs (Email,FullName,Message,Date_Time) VALUES
            // ("Bhaiya@gmail.com","Bhaiya Notebook","This is bhaiya Notebook Test Message","2022-07-16")"  
            
            if($conn->query($InsertQury) === TRUE){
                echo "<div class='alert alert-success' role='alert'>Data Recieved SuccessFully !</div>";
            }
            else{
                echo "<div class='alert alert-danger' role='alert'>Data not Inserted !</div>";
            }
        }
        
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>Data Failed !</div>";

    }

?>