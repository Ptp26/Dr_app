<?php
    include '../config.php';
    $Page = $_GET["Page"];
    //page = 1 = create
    //page = 2 = edit
    if($Page=="1"){
        $dr_id = $_GET["Dr"];
        $Start_date = $_GET["date"];
        $Start_time = $_GET["stime"].':00';
        $End_date = $_GET["date"];
        $End_time = $_GET["etime"].':00';
        $sql = "INSERT INTO `dr_schedule`(`dr_id`, `Start_date`, `Start_time`, `End_date`, `End_time`) VALUES ($dr_id,'$Start_date','$Start_time','$End_date','$End_time')";
        if ($mysqli->query($sql) === TRUE) {
            header("Location: view.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }         
    }
    elseif ($Page=="2"){
        echo $id = $_GET["id_dr"];
        $dr_id = $_GET["Dr"];
        $Start_date = $_GET["date"];
        $Start_time = $_GET["stime"].':00';
        $End_date = $_GET["date"];
        $End_time = $_GET["etime"].':00';
        echo $sql = "UPDATE `dr_schedule` SET `dr_id`='$dr_id',`Start_date`='$Start_date',`Start_time`='$Start_time',`End_date`='$End_date',`End_time`='$End_time' WHERE id='$id'";
        if ($mysqli->query($sql) === TRUE) {
            header("Location: view.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }  
    } 
    else{
        echo $id = $_GET["id"];

        echo $sql = "DELETE FROM `dr_schedule` WHERE id = $id";
        if ($mysqli->query($sql) === TRUE) {
            header("Location: view.php");
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }  

    }
    $mysqli->close();
