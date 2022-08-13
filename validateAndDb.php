<?php
    $sRoll = (int)$_POST['sRoll'];
    $sName = $_POST['sName'];
    if(!$sRoll){
        die("Please enter a valid roll number of a student\n");
    }
    else if(!$sName){
        die("Please enter a name of student<br>");
    }
    else{
        $con=mysqli_connect("localhost", "root", "");
        if(!$con){
            die("Not connnected to database server<br>");
        }
        else{
            $qu1=mysqli_query($con, "CREATE DATABASE IF NOT EXISTS studInfo");
            if(!$qu1){
                die("Database studInfo is not selected<br>");
            }
        else    {
            mysqli_query($con, "USE studInfo");
            echo "Database studInfo is selected<br>";
        }
        }
    }
?>