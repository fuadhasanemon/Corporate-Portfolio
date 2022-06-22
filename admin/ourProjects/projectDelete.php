<?php

    require '../controller/dbConfig.php';

    $banner_id = $_GET['banner_id'];
    $updateQuery = "UPDATE banner SET active_status=0 WHERE id='{$banner_id}'";
        
    $isInsrt = mysqli_query($dbCon, $updateQuery);

    if ($isInsrt == TRUE) {
        $message =  "Deleted succesfull";
    } else {
        $message = "Delete failed";
    }

    header("Location: ../banner/bannerList.php?msg={$message}");