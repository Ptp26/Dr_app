<?php
    include 'config.php';
    $Page = $_GET["Page"];
    //page = 1 = create
    //page = 2 = edit
    if($Page=="1"){
        $name = $_GET["name"];

        $sql = "INSERT INTO doctor (Name) VALUES ('$name')";
  
        if ($mysqli->query($sql) === TRUE) {
            header("Location: view.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }         
    }
    elseif ($Page=="2"){
        $name = $_GET["name"];
        $id = $_GET["id"];
        $sql = "UPDATE doctor SET Name = '$name' WHERE ID= $id";
  
        if ($mysqli->query($sql) === TRUE) {
            header("Location: view.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }  
    } 
    else{
        $id = $_GET["id"];
        echo $sql = "DELETE FROM `doctor` WHERE id = $id";
        if ($mysqli->query($sql) === TRUE) {
            header("Location: view.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }  

    }
    $mysqli->close();
