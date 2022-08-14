<?php
    $sRoll = (int)$_POST['sRoll'];
    $sName = $_POST['sName'];
    $sub1 = (int)$_POST['s1'];
    $sub2 = (int)$_POST['s2'];
    $sub3 = (int)$_POST['s3'];
    $sub4 = (int)$_POST['s4'];
    $sub5 = (int)$_POST['s5'];
    if(!$sRoll){
        die("Please enter a valid roll number of a student\n");
    }
    else if(!$sName){
        die("Please enter a name of student<br>");
    }
    else if(!$sub1 || !$sub2 || !$sub3 || !$sub4 || !$sub5){
        die("Please enter marks for each subject<br>");
    }
    else{
        $con=mysqli_connect("localhost", "root", "");
        if(!$con){
            die("Not connnected to database server<br>");
        }
        else{
            $qu1=mysqli_query($con, "CREATE DATABASE IF NOT EXISTS studInfo");
            mysqli_query($con, "USE studInfo");
            echo "The database studInfo is selected<br>";
            $qu2="CREATE TABLE IF NOT EXISTS studMarks(
                rollNo INTEGER,
                sName VARCHAR(50),
                subject1 INTEGER,
                subject2 INTEGER,
                subject3 INTEGER,
                subject4 INTEGER,
                subject5 INTEGER,
                PRIMARY KEY (rollNo))";
            $qu1=mysqli_query($con, $qu2);
            echo "Table is created<br>";
        }
    }
?>