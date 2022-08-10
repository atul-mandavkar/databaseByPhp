<?php
    $sRoll = (int)$_POST['sRoll'];
    $sName = $_POST['sName'];
    if(!$sRoll){
        die("Please enter a valid roll number of a student\n");
    }
    if(!$sName){
        die("Please enter a name of student<br>");
    }
        ?>