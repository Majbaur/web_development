<?php


    $connection = mysqli_connect("localhost", "root", "", "web_application_session");
    if($connection->connect_error){
        echo "connection Faild";
    } else{
        //echo "connection successful";

    }
    //data
    $ID = $_POST["ID"];
    $Name = $_POST["Name"];

    $query = "INSERT INTO student(ID, Name) VALUES (\"$ID\",\"$Name\")";

    $connection->query($query);
?>