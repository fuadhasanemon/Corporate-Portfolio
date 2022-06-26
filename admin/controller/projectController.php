<?php

require 'dbConfig.php';

// This is for create
if (isset($_POST['saveProject'])) {

    $upload_status = false;
    if (isset($_FILES['project_thumb'])) {
        
        $main_image_array = $_FILES['project_thumb'];

        $file_name = $main_image_array['name'];
        $file_fullPath = $main_image_array['full_path'];
        $file_type = $main_image_array['type'];
        $file_tmp_name = $main_image_array['tmp_name'];

        // if(move_uploaded_file($file_tmp_name, '../uploads/projectImage/'.$file_name)){
        //     echo "Image uploaded successfully";
        // } else {
        //     echo "Image upload failed";
        // }

        $nameExtArr = explode('.', $file_name);
        $file_extension = strtolower(end($nameExtArr));
        $valid_extensions = array('jpg', 'png', 'jpeg', 'svg');

        $random_file_name = time() . '.' . $file_extension;


        if (in_array($file_extension, $valid_extensions)) {
            move_uploaded_file($file_tmp_name, '../uploads/projectImage/' . $random_file_name);
            // $message = "Image uploaded successfully";
            $upload_status = true;
        } else {
            $message = $file_extension . " is not Supported";
        }
    } else {
        $message = 'image not found';
    }

    $category_id = $_POST['category_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    // $project_thumb = $_POST['project_thumb'];

    if (empty($category_id) || empty($project_name) || empty($project_link) || $upload_status == false) {
        echo "All fields required";
    } else {
        $insetQuery = "INSERT INTO our_projects (category_id, project_name, project_link, project_thumb) values ('{$category_id}','{$project_name}','{$project_link}', '{$random_file_name}')";

        $isInsrt = mysqli_query($dbCon, $insetQuery);

        if ($isInsrt == TRUE) {
            $message =  "Insertion succesfull";
        } else {
            $message = "Insertion failed";
        }

        header("Location: ../ourProjects/projectList.php?msg={$message}");
    }
}

// This is for update
if (isset($_POST['updateProject'])) {
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    // $project_thumb = $_POST['project_thumb'];

    if (isset($_FILES['project_thumb'])) {
        
        $main_image_array = $_FILES['project_thumb'];
        die($main_image_array);

        $nameExtArr = explode('.', $file_name);
        $file_extension = strtolower(end($nameExtArr));
        $valid_extensions = array('jpg', 'png', 'jpeg', 'svg');

        $random_file_name = time() . '.' . $file_extension;


        if (in_array($file_extension, $valid_extensions)) {
            move_uploaded_file($file_tmp_name, '../uploads/projectImage/' . $random_file_name);
            // $message = "Image uploaded successfully";
            $upload_status = true;
        } else {
            $message = $file_extension . " is not Supported";
        }
    } else {
        $message = 'image not found';
    }



    if (empty($project_name) || empty($project_link)) {
        echo "All fields required";
    } else {

        $updateQuery = "UPDATE our_projects SET project_name='{$project_name}', project_link='{$project_link}', project_thumb='{$random_file_name}' WHERE id='{$project_id}'";

        $isInsrt = mysqli_query($dbCon, $updateQuery);

        if ($isInsrt == TRUE) {
            $message =  "Update succesfull";
        } else {
            $message = "Update failed";
        }

        header("Location: ../ourProjects/projectList.php?project_id={$project_id}&msg={$message}");
    }
}
