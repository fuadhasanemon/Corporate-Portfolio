<?php

require 'dbConfig.php';

// This is for create
if (isset($_POST['saveBanner'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        echo "All fields required";
    } else {
        $insetQuery = "INSERT INTO banner (title, sub_title, details) values ('{$title}','{$sub_title}','{$details}')";
    
        $isInsrt = mysqli_query($dbCon, $insetQuery);
    
        if ($isInsrt) {
            $message =  "Insertion succesfull";
        } else {
            $message = "Insertion failed";
        }
    
        header("Location: ../banner/bannerAdd.php?msg={$message}");
    }
}

// This is for update
if (isset($_POST['updateBanner'])) {
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $details = $_POST['details'];

    if (empty($title) || empty($sub_title) || empty($details)) {
        echo "All fields required";
    } else {
        $insetQuery = "INSERT INTO banner (title, sub_title, details) values ('{$title}','{$sub_title}','{$details}')";
    
        $isInsrt = mysqli_query($dbCon, $insetQuery);
    
        if ($isInsrt) {
            $message =  "Insertion succesfull";
        } else {
            $message = "Insertion failed";
        }
    
        header("Location: ../banner/bannerAdd.php?msg={$message}");
    }
}
