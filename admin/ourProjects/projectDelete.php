<?php

    require '../controller/dbConfig.php';

    $project_id = $_GET['project_id'];
    $updateQuery = "UPDATE our_projects SET active_status=0 WHERE id='{$project_id}'";
        
    $isInsrt = mysqli_query($dbCon, $updateQuery);

    if ($isInsrt == TRUE) {
        $message =  "Deleted succesfull";
    } else {
        $message = "Delete failed";
    }

    header("Location: ../ourProjects/projectList.php?msg={$message}");